import 'package:applimobile/page/clientPage.dart';
import 'package:applimobile/page/pagedebienvenue.dart';
import 'package:flutter/material.dart';
import 'package:editable/editable.dart';
import 'datatableinvoice.dart';

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
    Text(
      'Index 0: Home',
      style: optionStyle,
    ),
    ClientScreen(),

    Text(
      'Index 3: Settings',
      style: optionStyle,
    ),
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
            icon: Icon(Icons.school),
            label: 'School',
          ),
        ],
        currentIndex: _selectedIndex,
        selectedItemColor: Colors.deepPurple,
        onTap: _onItemTapped,
      ),
    );
  }

}


