using System;
using System.Data;
using System.Data.SqlClient;
using System.Windows.Forms;

namespace Alumnos
{
    class DataBase
    {
        private string connetionString;

        private SqlConnection connection;

        private SqlCommand command;

        SqlDataReader dataReader;

        SqlDataAdapter dataAdapter;

        DataTable dataTable;

        private string query;

        public DataBase()
        {
            connetionString = "Server=localhost\\SQLEXPRESS;Database=Escuela;Trusted_Connection=True;";

            connection = new SqlConnection(connetionString);
        }

        public DataTable LoadDataGrid()
        {
            query = "SELECT * FROM Alumnos";

            try
            {
                connection.Open();

                command = new SqlCommand(query, connection);

                dataAdapter = new SqlDataAdapter(command);

                dataTable = new DataTable();

                dataAdapter.Fill(dataTable);

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

            return dataTable;
        }

        public void Delete(string no_control)
        {
            query = "DELETE FROM Alumnos WHERE no_control = " + no_control;

            try
            {
                connection.Open();

                command = new SqlCommand(query, connection);

                command.ExecuteNonQuery();

                MessageBox.Show("El Registro Fue Borrado", "Registro Borrado", MessageBoxButtons.OK, MessageBoxIcon.Information);

                command.Dispose();

                connection.Close();
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.ToString(), "Can not open connection ! ", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        public void Insert(string no_control, string nombre, string aPaterno, string aMaterno)
        {
            query = "INSERT INTO Alumnos VALUES(" + no_control + ", '" +
                                                    nombre + "', '" +
                                                    aPaterno + "', '" +
                                                    aMaterno + "')";

            try
            {
                connection.Open();

                command = new SqlCommand(query, connection);

                command.ExecuteNonQuery();

                MessageBox.Show("El Registro Fue Guardó", "Registro Nuevo", MessageBoxButtons.OK, MessageBoxIcon.Information);

                command.Dispose();

                connection.Close();
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.ToString(), "Can not open connection ! ", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        public void Select()
        {
            query = "SELECT * FROM Alumnos";

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

        public void Update(string original, string no_control, string nombre, string aPaterno, string aMaterno)
        {
            query = "UPDATE Alumnos SET no_control = " + no_control +
                                     ", nombre = '" + nombre +
                                    "', aPaterno = '" + aPaterno +
                                    "', aMaterno = '" + aMaterno + 
                  "' WHERE no_control = " + original;

            try
            {
                connection.Open();

                command = new SqlCommand(query, connection);

                command.ExecuteNonQuery();

                MessageBox.Show("El Registro Fue Actualizado", "Registro Actualizado", MessageBoxButtons.OK, MessageBoxIcon.Information);

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
