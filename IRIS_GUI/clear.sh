#This script Deletes all the custom made flows 

curl -X DELETE -H "Content-Type: application/json" -H "Accept: application/json" --user admin:admin http://localhost:8181/restconf/config/opendaylight-inventory:nodes/node/openflow:1
curl -X DELETE -H "Content-Type: application/json" -H "Accept: application/json" --user admin:admin http://localhost:8181/restconf/config/opendaylight-inventory:nodes/node/openflow:2
curl -X DELETE -H "Content-Type: application/json" -H "Accept: application/json" --user admin:admin http://localhost:8181/restconf/config/opendaylight-inventory:nodes/node/openflow:3
curl -X DELETE -H "Content-Type: application/json" -H "Accept: application/json" --user admin:admin http://localhost:8181/restconf/config/opendaylight-inventory:nodes/node/openflow:4
curl -X DELETE -H "Content-Type: application/json" -H "Accept: application/json" --user admin:admin http://localhost:8181/restconf/config/opendaylight-inventory:nodes/node/openflow:5
