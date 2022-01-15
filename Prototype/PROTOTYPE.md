The Prototype Design Pattern

This is an example of a Creational Design Pattern.

This design pattern specifies the kind of objects to create using a prototypical instance.

It creates new objects by copying the prototype.

There are three classes:
Client - creates a new object by asking a prototype to clone itself
Prototype - declares an interface for cloning itself
ConcretePrototype - implements the operation for cloning itself

When to use:
- If the cost of creating a new object is large and creation is resource intensive
  - The clone method does not call the constructor method and therefore increases performance.
- When a system should be independent of how its products are created, composed, and represented
- When classes to be instantiated are specified at run-time
- When you need to avoid the creation of a factory hierarchy
- 
