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
using static AlJabbarLibraries.Automata;

namespace AlJabbarTrans
{
    public partial class Rincian : Form
    {
        private Alur pesan; // Objek Alur untuk pemrosesan pesanan
        private Automata menu; // Objek Automata untuk manajemen menu
        public Rincian(string kotaAwal, string kotaTujuan, string jumlahKursi, string tanggalPemberangkatan, string jamPemberangkatan, prosesPesan currentState)
        {
            InitializeComponent();
            pesan = new Alur();
            menu = new Automata();

            // Mengatur label dengan data rincian pemesanan
            label3.Text = kotaAwal;
            label5.Text = kotaTujuan;
            label7.Text = jumlahKursi;
            label9.Text = tanggalPemberangkatan;
            label11.Text = jamPemberangkatan;

            menu.currentState = currentState; // Mengatur status terkini dari automata
        }

        private void Rincian_Load(object sender, EventArgs e)
        {
            PilihWaktu formPilihBis = Application.OpenForms.OfType<PilihWaktu>().FirstOrDefault();
            if (formPilihBis != null)
            {
                // Mengambil dan menampilkan kode bis dari Alur berdasarkan pilihan waktu
                label13.Text = pesan.getKodeBus(formPilihBis.SelectedValueComboBox1, formPilihBis.SelectedValueComboBox2);
            }

            Beranda formBeranda = Application.OpenForms.OfType<Beranda>().FirstOrDefault();
            if (formBeranda != null)
            {
                // Menghitung dan menampilkan harga pemesanan dari Alur berdasarkan pilihan waktu dan kursi
                label17.Text = (pesan.getHarga(formBeranda.SelectedValueComboBox1, formBeranda.SelectedValueComboBox2, formBeranda.SelectedValueComboBox3)).ToString();
            }

            Random random = new Random();
            int randomNumber = random.Next(1000, 10000);
            label15.Text = randomNumber.ToString(); // Menampilkan angka acak sebagai nomor rincian
        }
        //Tamat~~~
        //بِسْمِ اللّهِ الرَّحْمَنِ الرَّحِيْ nilai A
    }
}
