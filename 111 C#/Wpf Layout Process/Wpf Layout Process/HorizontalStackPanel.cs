using System.Windows;
using System.Windows.Controls;

namespace Wpf_Layout_Process
{
    class HorizontalStackPanel:Panel
    {
        protected override Size MeasureOverride(Size availableSize)
        {
            var size = new Size();

            foreach(UIElement child in this.InternalChildren)
            {
                child.Measure(availableSize);
                size.Width += child.DesiredSize.Width;
                size.Height = size.Height > child.DesiredSize.Height ? size.Height : child.DesiredSize.Height;
            }

            return size;
        }

        protected override Size ArrangeOverride(Size finalSize)
        {
            var location = new Point();

            foreach(UIElement child in this.InternalChildren)
            {
                child.Arrange(new Rect(location, child.DesiredSize));
                location.X += child.DesiredSize.Width;
            }
            return finalSize;
        }
    }
}
