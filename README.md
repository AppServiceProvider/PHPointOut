# PHP note: Roman Hossain Shaon

### Inheritance vs. Composition in PHP

* Inheritance: kind of relation |  is a relation
    - an employee can be a laborer, a scientist, a manager , an engineer
    - so a laborer is an employee, so is a scienrist and so on..
* is a : 
    - drive class object treated as base class object
    - car is a vehicals
    - vehical properties/behaviors also car properties/behaviors


* composition: has a relation 
    - an employee has a name. id ,salary
    - class member data can conatain basic data types asa well asa objects of other classes
    - an employee has a date of bartha and date of hiring and these can be represented by objects of a date class
    - composition allows for code reuse
* has a 
    - object contains one or more object of other classes as members
    - car has a steering wheel



* When to use inheritance
` Inheritance is appropriate when you have a clear "is-a" relationship between two classes. For example, a Car class could inherit from a Vehicle class. This is because a car is a type of vehicle.`

* When to use composition

` Composition is appropriate when you have a "has-a" relationship between two classes. For example, a Car class could have a Engine object as a property. This is because a car has an engine.`


### Inheritance & Composition pros and cons

 * Inheritance
   - Pros: Reusable code, easy to understand
   - Cons: Tightly coupled, can be abused, fragile

  * Composition
    - Pros: Reusable code, flexibility, loosely coupled
    - Cons: Harder to understand

