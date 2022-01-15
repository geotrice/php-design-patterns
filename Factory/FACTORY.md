The Factory Design Pattern

This is an example of a Creational Design Pattern.

Use this pattern when:
- to create objects without exposing the instantiation logic to
  the client (requesting) object.
- the program doesn't know how many objects need to be instantiated

Advantage:
New objects can be added without changing a single line of code
in the framework (the client code). The client doesn't need to 
account for any new code when asking for a Baseball or asking 
for a Basketball. 
