package Variables;

public class testArreglosMultiDimensional
{
    public static void main(String[] args)
    {
        int[][][] c = new int[3][][];
        c[0] = new int[2][2];
        c[1] = new int[3][];
        c[2] = new int[1][3];
        c[1][0] = new int[1];
        c[1][1] = new int[1];
        c[1][2] = new int[1];
        
        c[0][0][0] = 0;
        c[0][0][1] = 3;
        c[0][1][0] = 7;
        c[0][1][1] = 0;
        c[1][0][0] = 0;
        c[1][1][0] = 6;
        c[1][2][0] = 0;
        c[2][0][0] = 1;
        c[2][0][1] = 1;
        c[2][0][2] = 1;
        
//        for (int[][] ises : c)
//        {
//            for (int[] e : ises)
//            {
//                for (int i : e)
//                {
//                    System.out.println(i);
//                }
//            }
//        }

        for (int i = 0; i < c.length; i++)
        {
            int[][] ises = c[1];
            for (int j = 0; j < ises.length; j++)
            {
                int[] e = ises[j];
                for (int k = 0; k < e.length; k++)
                {
                    int l = e[k];
                    System.out.println("c[" + i + "][" + j +"][" + k +"]= " + l);
                }
            }
        }
        
    }
}
