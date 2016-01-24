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


class SimplePktSwitch(Topo):
    """Simple topology example."""

    def __init__(self, **opts):
        """Create custom topo."""

        super(SimplePktSwitch, self).__init__(**opts)

        # Add hosts and switches
        h0 = self.addHost('h0')
        h1 = self.addHost('h1')
        h2 = self.addHost('h2')
        h3 = self.addHost('h3')
        h4 = self.addHost('h4')
        h5 = self.addHost('h5')
        h6 = self.addHost('h6')
        h7 = self.addHost('h7')
        h8 = self.addHost('h8')

        # Adding switches
        s1 = self.addSwitch('s1', dpid="0000000000000001")
        s2 = self.addSwitch('s2', dpid="0000000000000002")
        s3 = self.addSwitch('s3', dpid="0000000000000003")
	    #s3 = self.addSwitch('s3', protocols=["OpenFlow13"],  dpid="0000000000000003")
        self.addLink(s1, s2)
        self.addLink(s2, s3)   

        # Add links
        self.addLink(h0, s1)
        self.addLink(h1, s1)
        self.addLink(h2, s1)
		
        self.addLink(h3, s2)
        self.addLink(h4, s2)
        self.addLink(h5, s2)
		
        self.addLink(h6, s3)
        self.addLink(h7, s3)
        self.addLink(h8, s3)
    


def run():
    c = RemoteController('c', '134.117.57.113')
    #switch = partial( OVSSwitch, protocols='OpenFlow13' )
    #c = RemoteController('c', '127.0.0.1')
    net = Mininet(topo=SimplePktSwitch(), host=CPULimitedHost, controller=None)
    net.addController(c)
    net.start()
    print "Dumping host connections"
    #dumpNodeConnections(net.hosts)
    print "Testing network connectivity"
    net.pingAll()
    #net.stop()

    #net.stop()

#def mininet.node.OVSLegacyKernelSwitch.start	(self,c)

# if the script is run directly (sudo custom/optical.py):
if __name__ == '__main__':
    setLogLevel('info')
    run()
