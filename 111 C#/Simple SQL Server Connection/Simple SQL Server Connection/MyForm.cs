using System;
using System.Data;
using System.Data.SqlClient;
using System.Diagnostics;
using System.Windows.Forms;

namespace Simple_SQL_Server_Connection
{
    public partial class MyForm : Form
    {
        public MyForm()
        {
            InitializeComponent();
        }


        public void MyForm_Load(object sender, EventArgs e)
        {
            Load_DataGrid();
        }

        public void Load_DataGrid()
        {
            string connetionString = null;

            connetionString = "Server=localhost\\SQLEXPRESS;Database=Escuela;Trusted_Connection=True;";

            SqlConnection connection;

            connection = new SqlConnection(connetionString);

            SqlCommand command;

            String query;

            query = "SELECT * FROM Alumnos";

            try
            {
                connection.Open();

                command = new SqlCommand(query, connection);

                SqlDataAdapter da = new SqlDataAdapter(command);

                DataTable dataTable = new DataTable();

                da.Fill(dataTable);

                dataGrid.DataSource = dataTable;

                dataTable.Columns[0].ColumnName = "No Control";
                dataTable.Columns[1].ColumnName = "aaa";
                dataTable.Columns[1].ColumnName = "Nombre";
                dataTable.Columns[2].ColumnName = "A. Paterno";
                dataTable.Columns[3].ColumnName = "A. Materno";

                command.Dispose();

                connection.Close();
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.ToString(), "Can not open connection ! ", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void connect_Click(object sender, EventArgs e)
        {
            string connetionString = null;

            connetionString = "Server=localhost\\SQLEXPRESS;Database=Escuela;Trusted_Connection=True;";

            SqlConnection connection;

            connection = new SqlConnection(connetionString);

            try
            {
                connection.Open();

                MessageBox.Show("Successful", "Database Connection", MessageBoxButtons.OK, MessageBoxIcon.Information);

                connection.Close();
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.ToString(), "Can not open connection ! ", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void insert_Click(object sender, EventArgs e)
        {
            string connetionString = null;

            connetionString = "Server=localhost\\SQLEXPRESS;Database=Escuela;Trusted_Connection=True;";

            SqlConnection connection;

            connection = new SqlConnection(connetionString);

            SqlCommand command;

            String query;

            query = "INSERT INTO Alumnos VALUES(123, 'Martin', 'Cervantes', 'Palomo')";

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

            Load_DataGrid();
        }

        private void select_Click(object sender, EventArgs e)
        {
            string connetionString = null;

            connetionString = "Server=localhost\\SQLEXPRESS;Database=Escuela;Trusted_Connection=True;";

            SqlConnection connection;

            connection = new SqlConnection(connetionString);

            SqlCommand command;

            String query;

            query = "SELECT * FROM Alumnos";

            SqlDataReader dataReader;

            try
            {
                connection.Open();

                command = new SqlCommand(query, connection);

                dataReader = command.ExecuteReader();

                string data = "No Control| Nombre  | A.Paterno  | A.Materno\n";

                while (dataReader.Read())
                {
                    data += dataReader.GetValue(0) + "\t| " + dataReader.GetValue(1) + "\t| " + dataReader.GetValue(2) + " | " + dataReader.GetValue(3) + "\n";
                }

                MessageBox.Show(data, "Info", MessageBoxButtons.OK, MessageBoxIcon.Information);

                command.Dispose();

                connection.Close();
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.ToString(), "Can not open connection ! ", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void delete_Click(object sender, EventArgs e)
        {
            string connetionString = null;

            connetionString = "Server=localhost\\SQLEXPRESS;Database=Escuela;Trusted_Connection=True;";

            SqlConnection connection;

            connection = new SqlConnection(connetionString);

            SqlCommand command;

            String query;

            query = "DELETE FROM Alumnos WHERE no_control = 123";

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

            Load_DataGrid();
        }

        private void update_Click(object sender, EventArgs e)
        {
            string connetionString = null;

            connetionString = "Server=localhost\\SQLEXPRESS;Database=Escuela;Trusted_Connection=True;";

            SqlConnection connection;

            connection = new SqlConnection(connetionString);

            SqlCommand command;

            String query;

            query = "UPDATE Alumnos SET nombre = 'Ramiro' WHERE no_control = 123";

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

            Load_DataGrid();
        }

        private void dataGrid_Click(object sender, EventArgs e)
        {
            Debug.WriteLine(dataGrid.CurrentRow.Cells[1].Value.ToString());
        }
    }
}
