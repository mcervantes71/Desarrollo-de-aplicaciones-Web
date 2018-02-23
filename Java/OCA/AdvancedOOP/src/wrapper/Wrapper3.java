/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package wrapper;

/**
 *
 * @author Humberto
 */
public class Wrapper3{
	public static void main(String[] args) {
		Integer i = new Integer(1) + new Integer(2);
		switch(i) {
			case 3: System.out.println("three"); break;
			default: System.out.println("other"); break;
		}
	}
}