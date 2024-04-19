using AlJabbarLibraries;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using static AlJabbarLibraries.Alur;
using static AlJabbarLibraries.Automata;

namespace AlJabbarTrans
{
    public partial class Beranda : Form
    {

        private Alur pesan;
        private Automata menu;
        public ComboBox SelectedValueComboBox1 { get; private set; }
        public ComboBox SelectedValueComboBox2 { get; private set; }
        public ComboBox SelectedValueComboBox3 { get; private set; }

        public Beranda(prosesPesan currentState)
        {
            InitializeComponent();
            pesan = new Alur();
            menu = new Automata();

            // Mengatur state adalah Beranda
            menu.currentState = currentState;

            // Mengatur posisi form ke tengah layar desktop
            this.StartPosition = FormStartPosition.CenterScreen;
        }

        private void Beranda_Load(object sender, EventArgs e)
        {
            // Menampung isi enum AreaType pada list enumVakues
            List<string> enumValues = pesan.PrintEnumValues<AreaType>();

            // Data di comboBox1 berasal dari list enumValues
            comboBox1.DataSource = enumValues;

            // Set label1 menjadi tanggal saat form dibuka
            label1.Text = DateTime.Now.ToString("dddd, dd MMMM yyyy");

            // default index comboBox adalah index ke 1
            comboBox3.SelectedIndex = 1;
        }

        private void comboBox1_SelectedIndexChanged(object sender, EventArgs e)
        {
            // Apabila tujuan asal adalah Bandung, maka comboBox2 menampilkan daftar enum Bandung
            if (comboBox1.SelectedItem != null && comboBox1.SelectedItem.ToString() == AreaType.Bandung.ToString())
            {
                List<string> enumValues = pesan.PrintEnumValues<Bandung>();
                comboBox2.DataSource = enumValues;
            }

            // Apabila tujuan asal adalah Jakarta, maka comboBox2 menampilkan daftar enum Jakarta
            else if (comboBox1.SelectedItem != null && comboBox1.SelectedItem.ToString() == AreaType.Jakarta.ToString())
            {
                List<string> enumValues = pesan.PrintEnumValues<Jakarta>();
                comboBox2.DataSource = enumValues;
            }
        }

        private void button1_Click(object sender, EventArgs e)
        {
            // Memastikan bahwa item yang dipilih tidak null sebelum mengambil nilainya *SECURE CODING
            if (comboBox1.SelectedItem != null && comboBox2.SelectedItem != null && comboBox3.SelectedItem != null)
            {
                /*Saat button1 di klik, akan menyimpan data kotaAwal, kotaTujuan, jumlahKursi, selectedDate, nextState
                , dan tanggalPemberangkatan kemudian mengirimkannya datanya ke form PilihWaktu dan menampilkannya*/
                string kotaAwal = comboBox1.SelectedItem.ToString();
                string kotaTujuan = comboBox2.SelectedItem.ToString();
                string jumlahKursi = comboBox3.SelectedItem.ToString(); // Mengambil selected item, bukan index
                DateTime selectedDate = dateTimePicker1.Value;
                prosesPesan nextState = menu.activateTrigger(Trigger.PILIH_TUJUAN);
                string tanggalPemberangkatan = selectedDate.ToString("dddd, dd MMMM yyyy");
                PilihWaktu form2 = new PilihWaktu(kotaAwal, kotaTujuan, tanggalPemberangkatan, jumlahKursi, nextState);
                form2.Show();
                this.Hide();
                SelectedValueComboBox1 = comboBox1;
                SelectedValueComboBox2 = comboBox2;
                SelectedValueComboBox3 = comboBox3;
            }
            else
            {
                MessageBox.Show("Mohon lengkapi semua field terlebih dahulu.");
            }
        }
    }
}
