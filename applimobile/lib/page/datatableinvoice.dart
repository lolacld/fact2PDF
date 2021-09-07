import 'package:flutter/material.dart';




/// This is the stateless widget that the main application instantiates.
class Tabledefacture extends StatelessWidget {

  @override
  Widget build(BuildContext context) {

    return DataTable(
      columns: const <DataColumn>[


        DataColumn(

          label: Text(
            'ID',
            style: TextStyle(fontStyle: FontStyle.italic),
          ),
        ),
        DataColumn(
          label: Text(
            'montant',
            style: TextStyle(fontStyle: FontStyle.italic),
          ),
        ),
        DataColumn(
          label: Text(
            'description',
            style: TextStyle(fontStyle: FontStyle.italic),
          ),
        ),
        DataColumn(
          label: Text(
            'quantité',
            style: TextStyle(fontStyle: FontStyle.italic),
          ),
        ),
        DataColumn(
          label: Text(
            'produit',
            style: TextStyle(fontStyle: FontStyle.italic),
          ),
        ),

      ],
      rows: const <DataRow>[
        DataRow(
          cells: <DataCell>[
            DataCell(Text('1')),
            DataCell(Text('64.2')),
            DataCell(Text('nullam ac tortor vitae purus')),
            DataCell(Text('20')),
            DataCell(Text('2')),
            DataCell(Text('Prooduit1')),

          ],
        ),
        DataRow(
          cells: <DataCell>[
            DataCell(Text('2')),
            DataCell(Text('43')),
            DataCell(Text('etiam dignissim diam quis enim lobortis')),
            DataCell(Text('20')),
            DataCell(Text('2')),
            DataCell(Text('Produit2')),

          ],
        ),
        DataRow(
          cells: <DataCell>[
            DataCell(Text('William')),
            DataCell(Text('27')),
            DataCell(Text('Associate Professor')),
          ],
        ),
      ],
    );
  }
}
