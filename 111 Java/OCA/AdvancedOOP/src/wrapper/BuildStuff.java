/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package wrapper;

/**
 *
 * @author Humberto
 */
public class BuildStuff {
	public static void main(String[] args) {
		Boolean test = new Boolean(true);
		Integer x = 343;
		BuildStuff bs=new BuildStuff();		
		Integer y = bs.go(test, x);
		System.out.println(y);
	}
	int go(Boolean b, int i) {
		if(b) return (i/7);
			return (i/49);
	}
}