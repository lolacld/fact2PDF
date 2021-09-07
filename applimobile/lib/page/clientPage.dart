import 'package:flutter/material.dart';

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

  String expandedValue;
  String headerValue;
  bool isExpanded;
}

List<ClientItem> generateItems(int numberOfItems) {
  return List<ClientItem>.generate(numberOfItems, (int index) {
    return ClientItem(
      headerValue: 'Panel $index',
      expandedValue: 'This is item number $index',
    );
  });
}

class ClientPage extends State<ClientScreen> {
  final List<ClientItem> _data = generateItems(8);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
        body: Column(
          children: [
            Text('Clients'),
            //_buildPanel(),
          ],
        )
    );
  }
}
/*  Widget _buildPanel() {
    return ExpansionPanelList(
      expansionCallback: (int index, bool isExpanded) {
        setState(() {
          _data[index].isExpanded = !isExpanded;
        });
      },
    children: _data.map<ExpansionPanel>((Item item) {
      return ExpansionPanel(
          headerBuilder: (BuildContext context, bool
      } isExpanded) {
            return ListTile(
            title: Text(item.headerValue
          }),
    );
            },

    );

}*/

