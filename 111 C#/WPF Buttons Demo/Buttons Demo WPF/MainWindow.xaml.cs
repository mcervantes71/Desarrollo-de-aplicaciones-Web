using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Controls.Primitives;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;

namespace Buttons_Demo_WPF
{
    /// <summary>
    /// Interaction logic for MainWindow.xaml
    /// </summary>
    public partial class MainWindow : Window
    {
        public MainWindow()
        {
            InitializeComponent();
        }

        private void Button_Click(object sender, RoutedEventArgs e)
        {
            Console.WriteLine("Ordinary Button");
        }

        private void RepeatButton_Click(object sender, RoutedEventArgs e)
        {
            Console.WriteLine("Repeat Button");
        }

        private void ToggleButton_Click(object sender, RoutedEventArgs e)
        {
            Console.WriteLine("Toggle Button");
        }

        private void ToggleButton_Checked(object sender, RoutedEventArgs e)
        {
            var toggleButton = (ToggleButton)sender;
            Console.WriteLine("{0} is checked. Now IsChecked = {1}", toggleButton.Name, toggleButton.IsChecked);
        }

        private void ToggleButton_Unchecked(object sender, RoutedEventArgs e)
        {
            var toggleButton = (ToggleButton)sender;
            Console.WriteLine("{0} is unchecked. Now IsChecked = {1}", toggleButton.Name, toggleButton.IsChecked);
        }

        private void ToggleButton_Indeterminate(object sender, RoutedEventArgs e)
        {
            var toggleButton = (ToggleButton)sender;
            Console.WriteLine("{0} is in indetermante. Now IsChecked = {1}", toggleButton.Name, toggleButton.IsChecked);
        }
    }
}
