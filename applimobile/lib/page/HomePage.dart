import 'package:applimobile/page/clientPage.dart';
import 'package:applimobile/page/contactPage.dart';
import 'package:applimobile/page/pagedebienvenue.dart';
import 'package:applimobile/page/collabPage.dart';
import 'package:flutter/material.dart';

class HomeScreen extends StatefulWidget {
  @override
  HomePage createState() => HomePage();
}

class HomePage extends State<HomeScreen> {
  int _selectedIndex = 0;
  static const TextStyle optionStyle =
      TextStyle(fontSize: 30, fontWeight: FontWeight.bold);
  List<Widget> _widgetOptions = <Widget>[
    ContactList(),
    ClientScreen(),
    CollabScreen(),
    ContactScreen(),
  ];

  void _onItemTapped(int index) {
    setState(() {
      _selectedIndex = index;
    });
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        backgroundColor: Colors.grey,
        title: Text(
          'FACT 2 PDF',
        ),
        centerTitle: true,
        actions: <Widget>[
          IconButton(
            icon: const Icon(Icons.login),
            tooltip: 'Vous Connecter',
            onPressed: () {
              Navigator.pushNamed(context, '/formulaire');
            },
          ),
        ],
      ),
      body: Center(
        child: _widgetOptions.elementAt(_selectedIndex),
      ),
      bottomNavigationBar: BottomNavigationBar(
        items: const <BottomNavigationBarItem>[
          BottomNavigationBarItem(
            icon: Icon(Icons.home),
            label: 'Accueil',
          ),
          BottomNavigationBarItem(
            icon: Icon(Icons.person),
            label: 'Clients',
          ),
          BottomNavigationBarItem(
            icon: Icon(Icons.contacts),
            label: 'Collab.',
          ),
          BottomNavigationBarItem(
            icon: Icon(Icons.email),
            label: 'Contact',
          ),
        ],
        currentIndex: _selectedIndex,
        selectedItemColor: Colors.deepPurple,
        unselectedItemColor: Colors.greenAccent,
        onTap: _onItemTapped,
      ),
    );
  }

}


