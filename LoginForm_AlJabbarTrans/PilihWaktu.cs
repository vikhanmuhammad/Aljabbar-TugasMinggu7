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
using static System.Windows.Forms.VisualStyles.VisualStyleElement;

namespace AlJabbarTrans
{
    public partial class PilihWaktu : Form
    {
        private Alur pesan;
        private Automata menu;
        public System.Windows.Forms.ComboBox SelectedValueComboBox1 { get; private set; }
        public System.Windows.Forms.ComboBox SelectedValueComboBox2 { get; private set; }

        public PilihWaktu(string kotaAwal, string kotaTujuan, string tanggal, string jumlahKursi, prosesPesan currentState)
        {
            InitializeComponent();
            pesan = new Alur();
            menu = new Automata();
            label3.Text = kotaAwal;
            label5.Text = kotaTujuan;
            label7.Text = jumlahKursi.ToString();
            label9.Text = tanggal;
            menu.currentState = currentState;
        }

        private void PilihWaktu_Load(object sender, EventArgs e)
        {
            // Mendapatkan daftar nilai dari enum Pemberangkatan dan mengisinya ke data source comboBox1
            List<string> enumValues = pesan.PrintEnumValues<Pemberangkatan>();
            comboBox1.DataSource = enumValues;
        }

        private void button2_Click(object sender, EventArgs e)
        {
            // Mengaktifkan trigger PILIH_WAKTU pada state machine menu dan memperbarui state nextState
            prosesPesan nextState = menu.activateTrigger(Trigger.PILIH_WAKTU);
            Rincian rincian = new Rincian(label3.Text, label5.Text, label7.Text, label9.Text, $"{comboBox1.SelectedItem}, {comboBox2.SelectedItem} WIB", nextState);
            rincian.Show();
            this.Hide();
            menu.activateTrigger(Trigger.PILIH_WAKTU);
        }

        private void button1_Click(object sender, EventArgs e)
        {
            // Mengaktifkan trigger PILIH_TUJUAN pada state machine menu
            prosesPesan backState = menu.activateTrigger(Trigger.PILIH_TUJUAN);
            Beranda home = new Beranda(backState);
            home.Show();
            this.Hide();
            
        }

        private void comboBox1_SelectedIndexChanged(object sender, EventArgs e)
        {
            // Memastikan bahwa item yang dipilih tidak null sebelum mengambil nilainya *SECURE CODING
            if (comboBox1.SelectedItem != null)
            {
                SelectedValueComboBox1 = comboBox1;
                string selectedValue = comboBox1.SelectedItem.ToString();
                if (selectedValue == Pemberangkatan.Pagi.ToString())
                {
                    // Jika pilihan comboBox1 adalah Pemberangkatan.Pagi, maka mendapatkan daftar nilai enum Pagi dan mengisinya ke data source comboBox2
                    List<string> enumValues = pesan.PrintEnumValuesSpecialTime<Pagi>();
                    comboBox2.DataSource = enumValues;
                    SelectedValueComboBox2 = comboBox2;
                }
                else if (selectedValue == Pemberangkatan.Sore.ToString())
                {
                    // Jika pilihan comboBox1 adalah Pemberangkatan.Sore, maka mendapatkan daftar nilai enum Sore dan mengisinya ke data source comboBox2
                    List<string> enumValues = pesan.PrintEnumValuesSpecialTime<Sore>();
                    comboBox2.DataSource = enumValues;
                    SelectedValueComboBox2 = comboBox2;
                }
                else if (selectedValue == Pemberangkatan.Malam.ToString())
                {
                    // Jika pilihan comboBox1 adalah Pemberangkatan.Malam, maka mendapatkan daftar nilai enum Malam dan mengisinya ke data source comboBox2
                    List<string> enumValues = pesan.PrintEnumValuesSpecialTime<Malam>();
                    comboBox2.DataSource = enumValues;
                    SelectedValueComboBox2 = comboBox2;
                }
            }
        }
    }
}
