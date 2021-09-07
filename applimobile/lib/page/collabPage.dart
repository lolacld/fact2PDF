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
            const Divider(
              height: 20,
              thickness: 5,
              indent: 20,
              endIndent: 20,
            ),
          ],
        )
    );
  }
}

