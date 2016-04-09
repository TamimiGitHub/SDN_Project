# This flow Rerouts all traffic going to S2 network to host 6

echo "This flow Rerouts all traffic going to S2 network to host 6 "
curl -X PUT -d @Flow3 -H "Content-Type: application/xml" -H "Accept: application/xml" --user admin:admin http://localhost:8181/restconf/config/opendaylight-inventory:nodes/node/openflow:2/table/0/flow/5
