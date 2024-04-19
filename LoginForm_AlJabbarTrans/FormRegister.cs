using AlJabbarLibraries;
using LoginForm_AlJabbarTrans;
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
    public partial class FormRegister : Form
    {
        private Automata menu;

        public FormRegister(prosesPesan currentState)
        {
            InitializeComponent();

            // Inisialisasi objek menu
            menu = new Automata();

            // Set nilai currentState pada objek menu
            menu.currentState = currentState;
        }

        private void buttonDaftar_Click(object sender, EventArgs e)
        {
            // Mengambil nilai input dari TextBox
            string email = textBoxEmail.Text;
            string password = textBoxPassword.Text;
            string konfirmasi = textBoxKonfirmasiPassword.Text;

            if (email.Contains("@") && !password.Equals("") && !konfirmasi.Equals(""))
            {
                // Jika email mengandung "@" dan password serta konfirmasi tidak kosong
                // Tampilkan pesan berhasil dan tampilkan form login
                MessageBox.Show("Akun berhasil didaftarkan!");
                menu.activateTrigger(Trigger.MASUK);
                formLogin login = new formLogin();
                login.Show();
                this.Hide();
            }
            else if (!string.IsNullOrWhiteSpace(email) && !string.IsNullOrWhiteSpace(password) && !string.IsNullOrWhiteSpace(konfirmasi))
            {
                // Jika email, password, atau konfirmasi password kosong atau hanya terdiri dari whitespace
                MessageBox.Show("Harap isi semua bidang dengan benar.");
            }
            else if (!email.Contains("@"))
            {
                // Jika email tidak mengandung karakter "@"
                // Tampilkan pesan peringatan
                MessageBox.Show("Email harus memiliki domain", "Peringatan", MessageBoxButtons.OK, MessageBoxIcon.Warning);
            }
        }
    }
}
