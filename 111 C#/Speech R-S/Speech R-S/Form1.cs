using System;
using System.Windows.Forms;
using System.Speech.Synthesis;
using System.Speech.Recognition;
using System.Diagnostics;

namespace Speech_R_S
{
    public partial class Form1 : Form
    {
        SpeechSynthesizer speaker = new SpeechSynthesizer();

        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            speaker.SelectVoiceByHints(VoiceGender.Female, VoiceAge.Child);

            Debug.WriteLine("System up");
            SpeechRecognitionEngine sre = new SpeechRecognitionEngine();
            //SpeechRecognitionEngine sre = new SpeechRecognitionEngine(new System.Globalization.CultureInfo("es-MX"));
            sre.SetInputToDefaultAudioDevice();
            sre.LoadGrammar(new DictationGrammar());
            sre.RecognizeAsync(RecognizeMode.Multiple);

            sre.SpeechRecognized += sre_SpeechRecognized;
        }

        void sre_SpeechRecognized(object sender, SpeechRecognizedEventArgs e)
        {
            Debug.WriteLine("You said: {0}", e.Result.Text);

            if (e.Result.Text == "hello")
            {
                speaker.Speak("Hello world.");
            }
        }

        private void button1_Click(object sender, EventArgs e)
        {
            if (textBox1.Text != "")
                speaker.Speak(textBox1.Text);
            else
                speaker.Speak("You forgot to write something");
        }
    }
}
