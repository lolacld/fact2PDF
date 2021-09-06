import 'package:flutter/material.dart';
import 'bottombar.dart';

class HomeScreen extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
        appBar: AppBar(),
        body: Center(
          child: Row(children: [
            ElevatedButton(
                onPressed: () => Navigator.pushNamed(context, '/palindrome'),
                child: Text('Palindrome')),
            ElevatedButton(
                onPressed: () => Navigator.pushNamed(context, '/lipogramme'),
                child: Text('Lipogramme')),
            ElevatedButton(
                onPressed: () => Navigator.pushNamed(context, '/anagramme'),
                child: Text('Anagramme')),
          ]),
        )

    );

  }
}
