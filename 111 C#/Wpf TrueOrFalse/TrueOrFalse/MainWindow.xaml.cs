using Microsoft.Win32;
using System.IO;
using System.Reflection;
using System.Windows;
using System.Windows.Controls;

namespace TrueOrFalse
{
    public partial class MainWindow : Window
    {
        
        private Persistance _trueFalse = new Persistance("database.xml");
        
        public MainWindow()
        {
            InitializeComponent();
            
            Loaded += (sender, arg) => { SetCurrentState(1); };
        }
        
        private void SetCurrentState(int index)
        {
            if(_trueFalse.Exists(index))
            {
                StatementText.Text = _trueFalse[index].Text;
                TrueFalseMark.IsChecked = _trueFalse[index].IsTrue;
            }
            else
            {
                StatementText.Text = "";
                TrueFalseMark.IsChecked = false;
            }

            UpdateAddButtonState(index);
            SaveStatement.IsEnabled = !IsStatementEmpty() && _trueFalse.Exists(index);
            RemoveStatement.IsEnabled = _trueFalse.Exists(index);
        }
        
        private void UpdateAddButtonState(int index)
        {
            AddStatement.IsEnabled = !IsStatementEmpty() && !_trueFalse.Exists(index);
        }
        
        private bool IsStatementEmpty()
        {
            return StatementText.Text == string.Empty;
        }
        
        private void NewDB_Click(object sender, RoutedEventArgs e)
        {
            var sfd = new SaveFileDialog();

            if(sfd.ShowDialog() == true)
            {
                _trueFalse = new Persistance(sfd.FileName);
                _trueFalse.Save();

                StatementNumber.Value = 1;
                StatementText.Text = string.Empty;
            }
        }
        
        private void OpenDB_Click(object sender, RoutedEventArgs e)
        {
            var ofd = new OpenFileDialog
            {
                InitialDirectory = Path.GetDirectoryName(Assembly.GetExecutingAssembly().Location)
            };

            if(ofd.ShowDialog() == true)
            {
                _trueFalse = new Persistance(ofd.FileName);
                _trueFalse.Load();
            }

            StatementNumber.Value = 1;
        }
        
        private void SaveDB_Click(object sender, RoutedEventArgs e)
        {
            _trueFalse.Save();
        }
        
        private void SaveDB_As_Click(object sender, RoutedEventArgs e)
        {
            var sfd = new SaveFileDialog();

            if(sfd.ShowDialog() == true)
            {
                _trueFalse = new Persistance(sfd.FileName);
                _trueFalse.Save();
            }
        }
        
        private void StartGame_Click(object sender, RoutedEventArgs e)
        {
            var gameWindow = new GameWindow(_trueFalse.Statements);
            gameWindow.ShowDialog();
        }
        
        private void Exit_Click(object sender, RoutedEventArgs e)
        {
            Application.Current.Shutdown();
        }
        
        private void Copy_Click(object sender, RoutedEventArgs e)
        {
            Clipboard.SetText(StatementText.Text);
        }
        
        private void Paste_Click(object sender, RoutedEventArgs e)
        {
            StatementText.Text = Clipboard.GetText();
        }
        
        private void Cut_Click(object sender, RoutedEventArgs e)
        {
            Clipboard.SetText(StatementText.Text);
            StatementText.Text = string.Empty;
        }
        
        private void AddStatement_Click(object sender, RoutedEventArgs e)
        {
            _trueFalse.Add(GetCurrentStatementState());
            StatementNumber.Value++;
        }
        
        private Statement GetCurrentStatementState()
        {
            return new Statement(StatementText.Text, TrueFalseMark.IsChecked.GetValueOrDefault());
        }
        
        private void RemoveStatement_Click(object sender, RoutedEventArgs e)
        {
            int currentIndex = GetCurrentIndex();
            
            if(_trueFalse.Exists(currentIndex))
            {
                _trueFalse.Remove(currentIndex);

                if (StatementNumber.Value > 1)
                    StatementNumber.Value--;
                else
                    SetCurrentState(1);
            }
        }
        
        private void SaveStatement_Click(object sender, RoutedEventArgs e)
        {
            UpdateCurrentStatement();
            StatementNumber.Value++;
        }
        
        private void UpdateCurrentStatement()
        {
            if (GetCurrentIndex() < _trueFalse.Count)
                _trueFalse.Change(GetCurrentIndex(), GetCurrentStatementState());
        }
        
        private void StatementNumber_OnValueChanged(object sender, RoutedPropertyChangedEventArgs<object> e)
        {
            if (StatementText == null)
                return;

            SetCurrentState(GetCurrentIndex());
        }
        
        private int GetCurrentIndex()
        {
            return (int)(StatementNumber.Value == 0 ? 0 : StatementNumber.Value - 1);
        }
        
        private void TrueFalseMark_OnClick(object sender, RoutedEventArgs e)
        {
            UpdateCurrentStatement();
        }
        
        private void StatementText_TextChanged(object sender, TextChangedEventArgs e)
        {
            UpdateAddButtonState(GetCurrentIndex());
        }
    }
}
