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
        Text('Collaborateurs'),
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

        const Divider(
          height: 10,
          thickness: 2,
          indent: 20,
          endIndent: 20,
          color: Colors.black,
        ),
      ],
    ));
  }
}
