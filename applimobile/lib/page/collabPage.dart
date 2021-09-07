import 'package:flutter/material.dart';

class CollabScreen extends StatefulWidget {
  @override
  CollabPage createState() => CollabPage();
}

class CollabPage extends State<CollabScreen> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
        body: Column(
      children: [
        Padding(padding: EdgeInsets.fromLTRB(20, 20, 20, 20),
            child: Text('Collaborateurs', style: TextStyle(fontSize: 20, fontWeight: FontWeight.bold))
        ),
        DataTable(
          columns: const <DataColumn>[
            DataColumn(
              label: Text(
                'Nom',
                style: TextStyle(fontStyle: FontStyle.italic),
              ),
            ),
            DataColumn(
              label: Text(
                'Prénom',
                style: TextStyle(fontStyle: FontStyle.italic),
              ),
            ),
            DataColumn(
              label: Text(
                'Email',
                style: TextStyle(fontStyle: FontStyle.italic),
              ),
            ),
          ],
          rows: const <DataRow>[
            DataRow(cells: <DataCell>[
              DataCell(Text('Caillaud')),
              DataCell(Text('Lola')),
              DataCell(Text('lola.caillaud@viacesi.fr')),
            ]),
            DataRow(
              cells: <DataCell>[
                DataCell(Text('Vigier-Audu')),
                DataCell(Text('Arthur')),
                DataCell(Text('arthur.vigieraudu@viacesi.fr')),
              ]),
            DataRow(
              cells: <DataCell>[
                DataCell(Text('Scheuber')),
                DataCell(Text('Emma')),
                DataCell(Text('emma.scheuber@viacesi.fr')),
              ]),
          ],
        ),
      ],
    ));
  }
}
