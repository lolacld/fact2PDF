import 'contat.dart';
import 'package:flutter/material.dart';

class ContactList extends StatefulWidget {
  @override
  _ContactListState createState() => _ContactListState();
}

class _ContactListState extends State<ContactList> {
  List<Contact> contacts = [
    Contact(nom: 'Alexandre Clain', imageProfil: 'image-1.jpg'),
    Contact(nom: 'Eric Artigala', imageProfil: 'image-2.png'),
    Contact(nom: 'Nicolas ', imageProfil: 'image-3.jpg'),
    Contact(nom: 'Chritel Olame', imageProfil: 'image-5.jpg'),
    Contact(nom: 'Jonathan Bisimwa', imageProfil: 'image-6.jpg'),
    Contact(nom: 'Louise Aladin', imageProfil: 'image-4.jpg'),
  ];



  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body:
       ListView.builder(

          itemCount: contacts.length,
          itemBuilder: (context, index) {

            /*var nameInitial = contacts[index].nom[0];
            if (contacts[index].imageProfil.length > 0) {
              nameInitial = '';
            }*/

            return Padding(
              padding:
              const EdgeInsets.symmetric(vertical: 0.0, horizontal: 4.0),
              child: Card(
                child: ListTile(

                  /*onTap: () => showDialog(context: context, builder: (context)
                  => _dialogBuilder(context, contacts[index])),*/

                  title: Text(contacts[index].nom, style: Theme.of(context).textTheme.title),
                  leading: CircleAvatar(
                    //backgroundColor: _color,
                    backgroundImage:
                    AssetImage('assets/${contacts[index].imageProfil}'),

                  ),
                ),
              ),
            );
          }),
    );
  }
}
