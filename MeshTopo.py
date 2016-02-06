__author__ = 'Larona'
from mininet.node import CPULimitedHost
from mininet.node import OVSKernelSwitch
from mininet.topo import Topo
from mininet.net import Mininet
from mininet.log import setLogLevel, info
from mininet.node import RemoteController
from mininet.cli import CLI
"""
Instructions to run the topo:
    1. Go to directory where this file is.
    2. run: sudo -E python Simple_Pkt_Topo.py.py
T
"""


class MeshTopo(Topo):
    """Mesh topology example."""

    def __init__(self, **opts):
        """Create custom topo."""

        #super(SimplePktSwitch, self).__init__(**opts)

        Topo.__init__( self )

        # Init values
        switches = 5   # total switchs
        cons = 5        # connections with next switch
        if cons >= switches:
                cons = switches - 1
        hosts = 5      # nodes per switch

        # Create host and Switch
        # Add link :: host to switch
        for s_num in range(1,switches+1):
                switch = self.addSwitch("s%s" %(s_num))
                for h_num in range(1,hosts+1):
                        host = self.addHost("h%s" %(h_num + ((s_num - 1) * hosts)))
                        self.addLink(host,switch)

        # Add link :: switch to switch
        for src in range(1,switches+1):
                for c_num in range(1,cons+1):
                        dst = src + c_num
                        if dst <= switches:
                                print("s%s" %src,"s%s" %dst)
                                self.addLink("s%s" %src,"s%s" %dst)
                        else:
                                dst = dst - switches
                                if src - dst > cons:
                                        print("s%s" %src,"s%s" %dst)
                                        self.addLink("s%s" %src,"s%s" %dst)


   

def run():
    c = RemoteController('c', '134.117.57.114')
    #switch = partial( OVSSwitch, protocols='OpenFlow13' )
    #c = RemoteController('c', '127.0.0.1')
    net = Mininet(topo=MeshTopo(), host=CPULimitedHost, controller=None)
    net.addController(c)
    net.start()
    #net.pingAll()
    CLI(net)
    net.stop()

# if the script is run directly (sudo custom/optical.py):
if __name__ == '__main__':
    setLogLevel('info')
    run()
