# This flow drops all the http (TCP port 80) traffic going/leaving user defined switch
#Inputs: only one parameter --> switch number

echo "This flow drops all the http (TCP port 80) traffic going/leaving Switch $1 "

curl -X PUT -d @Flow2 -H "Content-Type: application/xml" -H "Accept: application/xml" --user admin:admin http://localhost:8181/restconf/config/opendaylight-inventory:nodes/node/openflow:$1/table/0/flow/10
