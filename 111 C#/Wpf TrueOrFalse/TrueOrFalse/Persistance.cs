using System.Collections.Generic;
using System.IO;
using System.Xml.Serialization;

namespace TrueOrFalse
{
    class Persistance
    {
        public string FilePath { get; }
        public List<Statement> Statement { get; private set; } = new List<Statement>();

        public Persistance(string filePath)
        {
            FilePath = filePath;
        }

        public void Add(Statement q)
        {
            Statement.Add(q);
        }

        public void Remove(int index)
        {
            Statement.RemoveAt(index);
        }

        public Statement this[int index] => Statement[index];

        public void Save()
        {
            XmlSerializer xmlFormat = new XmlSerializer(typeof(List<Statement>));
            Stream fStream = new FileStream(FilePath, FileMode.Create, FileAccess.Write);
            xmlFormat.Serialize(fStream, Statement);
            fStream.Close();
        }

        public void Load()
        {
            XmlSerializer xmlFormat = new XmlSerializer(typeof(List<Statement>));
            Stream fStream = new FileStream(FilePath, FileMode.Open, FileAccess.Read);
            Statement = (List<Statement>)xmlFormat.Deserialize(fStream);
            fStream.Close();
        }

        public int Count => Statement.Count;

        public void Change(int index, Statement q)
        {
            Statement[index] = q;
        }

        public bool Exists(int index)
        {
            return Count > index;
        }
    }
}
