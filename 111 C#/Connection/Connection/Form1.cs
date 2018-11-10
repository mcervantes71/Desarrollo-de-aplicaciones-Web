using System;
using System;
using System;
using System.Data.SqlClient;
using System.Windows.Forms;

namespace Connection
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            string conexionString = null;

            conexionString = "Server=localhost\\SQLEXPRESS;Database=Escuela;Trusted_Connection=True;";

            SqlConnection conexion;

            conexion = new SqlConnection(conexionString);

            try
            {
                conexion.Open();

                MessageBox.Show("Conexion exitosa");

                conexion.Close();
            }
            catch(Exception ex)
            {
                MessageBox.Show(ex.ToString());
            }
        }

        private void button2_Click(object sender, EventArgs e)
        {
            string conexionString = null;

            conexionString = "Server=localhost\\SQLEXPRESS;Database=Escuela;Trusted_Connection=True;";

            SqlConnection conexion;

            conexion = new SqlConnection(conexionString);

            SqlCommand comando;

            string query;

            query = "INSERT INTO Alumnos VALUES(321321, 'Martin', 'Cervantes', 'Palomo')";

            try
            {
                conexion.Open();

                comando = new SqlCommand(query, conexion);

                comando.ExecuteNonQuery();

                MessageBox.Show("Registro Guardado");

                comando.Dispose();

                conexion.Close();
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.ToString());
            }
        }

        private void button3_Click(object sender, EventArgs e)
        {
            string conexionString = null;

            conexionString = "Server=localhost\\SQLEXPRESS;Database=Escuela;Trusted_Connection=True;";

            SqlConnection conexion;

            conexion = new SqlConnection(conexionString);

            SqlCommand comando;

            string query;

            query = "SELECT * FROM Alumnos;";

            SqlDataReader dataReader;

            try
            {
                conexion.Open();

                comando = new SqlCommand(query, conexion);

                dataReader = comando.ExecuteReader();

                string data = "No Control|   Nombre   | A. Paterno | A. Materno\n";

                while(dataReader.Read())
                {
                    data += dataReader.GetValue(0) + "\t" + dataReader.GetValue(1) + "\t" + dataReader.GetValue(2) + "\t" + dataReader.GetValue(3) + "\n";
                }

                MessageBox.Show(data);

                comando.Dispose();

                conexion.Close();
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.ToString());
            }
        }

        private void button4_Click(object sender, EventArgs e)
        {
            string conexionString = null;

            conexionString = "Server=localhost\\SQLEXPRESS;Database=Escuela;Trusted_Connection=True;";

            SqlConnection conexion;

            conexion = new SqlConnection(conexionString);

            SqlCommand comando;

            string query;

            query = "DELETE FROM Alumnos WHERE No_Control = 321321";

            try
            {
                conexion.Open();

                comando = new SqlCommand(query, conexion);

                comando.ExecuteNonQuery();

                MessageBox.Show("Registro Borrado");

                comando.Dispose();

                conexion.Close();
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.ToString());
            }
        }

        private void button5_Click(object sender, EventArgs e)
        {
            string conexionString = null;

            conexionString = "Server=localhost\\SQLEXPRESS;Database=Escuela;Trusted_Connection=True;";

            SqlConnection conexion;

            conexion = new SqlConnection(conexionString);

            SqlCommand comando;

            string query;

            query = "UPDATE Alumnos SET No_Control = 123456 WHERE No_Control = 321321";

            try
            {
                conexion.Open();

                comando = new SqlCommand(query, conexion);

                comando.ExecuteNonQuery();

                MessageBox.Show("Registro Actualizado");

                comando.Dispose();

                conexion.Close();
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.ToString());
            }
        }
    }
}
