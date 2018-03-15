using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Data.SqlClient;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Simple_SQL_Server_Connection
{
    public partial class MyForm : Form
    {
        public MyForm()
        {
            InitializeComponent();
        }

        private void conexion_Click(object sender, EventArgs e)
        {
            string connetionString = null;

            connetionString = "Server=localhost\\SQLEXPRESS;Database=Escuela;Trusted_Connection=True;";

            SqlConnection connection;

            connection = new SqlConnection(connetionString);

            try
            {
                connection.Open();

                MessageBox.Show("Successful Connection", "Connection Open ! ", MessageBoxButtons.OK, MessageBoxIcon.Information);

                connection.Close();
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.ToString(), "Can not open connection ! ", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void nuevo_Click(object sender, EventArgs e)
        {
            string connetionString = null;

            connetionString = "Server=localhost\\SQLEXPRESS;Database=Escuela;Trusted_Connection=True;";

            SqlConnection connection;

            connection = new SqlConnection(connetionString);

            SqlCommand command;

            String query;

            query = "INSERT INTO Alumnos VALUES(123, 'Martin Cervantes')";

            try
            {
                connection.Open();

                command = new SqlCommand(query, connection);

                command.ExecuteNonQuery();

                MessageBox.Show("Successful", "New Record", MessageBoxButtons.OK, MessageBoxIcon.Information);

                command.Dispose();

                connection.Close();
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.ToString(), "Can not open connection ! ", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void consultas_Click(object sender, EventArgs e)
        {
            string connetionString = null;

            connetionString = "Server=localhost\\SQLEXPRESS;Database=Escuela;Trusted_Connection=True;";

            SqlConnection connection;

            connection = new SqlConnection(connetionString);

            SqlCommand command;

            String query;

            query = "SELECT * FROM Alumnos WHERE alumno_id = 123";

            SqlDataReader dataReader;

            try
            {
                connection.Open();

                command = new SqlCommand(query, connection);

                dataReader = command.ExecuteReader();

                while (dataReader.Read())
                {
                    MessageBox.Show(dataReader.GetValue(0) + " - " + dataReader.GetValue(1),"Info", MessageBoxButtons.OK, MessageBoxIcon.Information);
                }
                
                command.Dispose();

                connection.Close();
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.ToString(), "Can not open connection ! ", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void borrar_Click(object sender, EventArgs e)
        {
            string connetionString = null;

            connetionString = "Server=localhost\\SQLEXPRESS;Database=Escuela;Trusted_Connection=True;";

            SqlConnection connection;

            connection = new SqlConnection(connetionString);

            SqlCommand command;

            String query;

            query = "DELETE FROM Alumnos WHERE alumno_id = 123";

            try
            {
                connection.Open();

                command = new SqlCommand(query, connection);

                command.ExecuteNonQuery();

                MessageBox.Show("Successful", "New Record", MessageBoxButtons.OK, MessageBoxIcon.Information);

                command.Dispose();

                connection.Close();
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.ToString(), "Can not open connection ! ", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void actualizar_Click(object sender, EventArgs e)
        {
            string connetionString = null;

            connetionString = "Server=localhost\\SQLEXPRESS;Database=Escuela;Trusted_Connection=True;";

            SqlConnection connection;

            connection = new SqlConnection(connetionString);

            SqlCommand command;

            String query;

            query = "UPDATE Alumnos SET alumno_nombre = 'Ramiro Rodriguez' WHERE alumno_id = 123";

            try
            {
                connection.Open();

                command = new SqlCommand(query, connection);

                command.ExecuteNonQuery();

                MessageBox.Show("Successful", "New Record", MessageBoxButtons.OK, MessageBoxIcon.Information);

                command.Dispose();

                connection.Close();
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.ToString(), "Can not open connection ! ", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }
    }
}
