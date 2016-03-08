# This flow drops all the http (TCP port 80) traffic going/leaving S2 network 

echo "This flow drops all the http (TCP port 80) traffic going/leaving S2 network "

curl -X PUT -d @Flow2 -H "Content-Type: application/xml" -H "Accept: application/xml" --user admin:admin http://localhost:8181/restconf/config/opendaylight-inventory:nodes/node/openflow:2/table/0/flow/10
