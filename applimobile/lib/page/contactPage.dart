import 'package:flutter/material.dart';
import 'datatableinvoice.dart';

class ClientScreen extends StatefulWidget {


  @override
  ClientPage createState() => ClientPage();
}

// stores ExpansionPanel state information
class ClientItem {
  ClientItem({
    required this.expandedValue,
    required this.headerValue,
    this.isExpanded = false,
  });

  Object expandedValue;
  String headerValue;
  bool isExpanded;
  String ClientName='';
}

List<ClientItem> generateItems(int numberOfItems) {
  return List<ClientItem>.generate(numberOfItems, (int index) {
    return ClientItem(
      headerValue: 'Client $index',
      expandedValue: Tabledefacture(),

    );
  });
}

class ClientPage extends State<ClientScreen> {
  final List<ClientItem> _data = generateItems(6);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
        body: Column(
          children: [
            Padding(padding: EdgeInsets.fromLTRB(20, 20, 20, 20),
                child: Text('Clients', style: TextStyle(fontSize: 20, fontWeight: FontWeight.bold))
            ),
            _buildPanel(),
          ],
        )
    );
  }

  Widget _buildPanel() {
    return ExpansionPanelList(
      expansionCallback: (int index, bool isExpanded) {
        setState(() {
          _data[index].isExpanded = !isExpanded;
        });
      },
      children: _data.map<ExpansionPanel>((ClientItem item) {
        return ExpansionPanel(
          headerBuilder: (BuildContext context, bool isExpanded) {
            return ListTile(
              title: Text(item.headerValue),
            );
          },
          body: Container(
              child: Tabledefacture()

          )
          ,
          isExpanded: item.isExpanded,
        );
      }).toList(),
    );
  }
}
void IntitCLientName (int index, String ClientName)
 {
   switch(index) {
     case 1:
       ClientName = '';
   }

}
