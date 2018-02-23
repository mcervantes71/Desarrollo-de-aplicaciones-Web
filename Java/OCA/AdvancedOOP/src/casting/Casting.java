/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package casting;

/**
 *
 * @author DianaG
 */
class A{void metodo(){System.out.println("a");}}
class B{void metodo(){System.out.println("b");}}
class C extends A{void metodo(){System.out.println("c");}
    void metodo2(){System.out.println("c2");}}
class D extends B{void metodo(){System.out.println("d");}}
class E extends C{void metodo(){System.out.println("e");}}
class F extends D{void metodo(){System.out.println("f");}}
public class Casting{
	public static void main(String args[]){
		A a=new A();	B b=new B();	C c=new C();
		D d=new D();	E e=new E();	F f=new F();
	//Parte 1:
                //a=b;		
		a=c;	
		//a=d;	
		a=e;	
	//	a=f;
	//	c=a;
	//	d=b;
	
        //Parte 2:	
		a=(C)e;
		//a=(E)c;
		//e=(C)e;
		a=(A)(C)e;
		a.metodo();
		a=(C)e;
		a.metodo();
        
	//Parte 3:	
		A ac=new C();
		ac.metodo();
		c=(C)ac;
		c.metodo2();
		a=(A)ac;
		a.metodo();		
	
        }
}