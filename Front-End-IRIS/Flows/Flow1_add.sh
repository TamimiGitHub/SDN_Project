# This flow drops all the traffic coming from 
# user defined host to user definedswitch 
# First parameter is host. Second paramet is switch

echo "This flow drops all the traffic coming from host $1 to switch $2"
xmlstarlet ed -u "_:flow/_:match/_:ethernet-match/_:ethernet-source/_:address" -v 00:00:00:00:00:$1 BaseFlow1.xml>Flow1
curl -X PUT -d @Flow1 -H "Content-Type: application/xml" -H "Accept: application/xml" --user admin:admin http://localhost:8181/restconf/config/opendaylight-inventory:nodes/node/openflow:$2/table/0/flow/10
