# This flow drops all the traffic coming from h5 to switch 5
echo "This flow drops all the traffic coming from h5 to switch 5"
curl -X PUT -d @Flow1 -H "Content-Type: application/xml" -H "Accept: application/xml" --user admin:admin http://localhost:8181/restconf/config/opendaylight-inventory:nodes/node/openflow:5/table/0/flow/10
