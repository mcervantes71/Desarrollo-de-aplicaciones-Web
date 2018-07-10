using System;
using System.Collections;
using System.Diagnostics;
using System.Windows;
using System.Windows.Controls;

namespace Wpf_ComboBox_Demo
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

        private void Dates_OnSelectChange(object sender, SelectionChangedEventArgs e)
        {
            IList items = e.AddedItems;
            int index = Dates.SelectedIndex;
            object selectedItem = Dates.SelectedItem;
            object selectedValue = Dates.SelectedValue;

            Debug.WriteLine("\n* * * * * * * * * * * * * * * * * * * * * * * * *\n");
            Debug.WriteLine("AddedItem:{0}", (DateTime)items[0]);
            Debug.WriteLine("SeledtedIndex:{0}", index);
            Debug.WriteLine("SeledtedItem:{0}", (DateTime)selectedItem);
            //Debug.WriteLine("SeledtedValue:{0}", (DayOfWeek)selectedValue);

        }
    }
}
