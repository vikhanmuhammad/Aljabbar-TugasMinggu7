using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using AlJabbarLibraries;
using LoginForm_AlJabbarTrans;
using static AlJabbarLibraries.Automata;

namespace AlJabbarTrans
{
    public partial class FormLupaPassword : Form
    {
        private Automata menu;

        public FormLupaPassword(prosesPesan currentState)
        {
            //Set currentState pada objek menu
            InitializeComponent();
            menu = new Automata();
            menu.currentState = currentState;
        }


        //Method yang digunakan untuk kembali ke halaman login ketika klik button Simpan
        private void buttonSimpan_Click(object sender, EventArgs e)
        {
            //Input pada setiap textBox berupa string
            string email = textBoxEmail.Text;
            string password = textBoxPassword.Text;
            string konfirmasiPass = textBoxKonfirmasiPass.Text;

            //Kondisi untuk cek jika textBox email,password dan konfirmasi password kosong atau tidak
            if (string.IsNullOrEmpty(email) && string.IsNullOrEmpty(password) && string.IsNullOrEmpty(konfirmasiPass))
            {
                //Jika kosong akan mengeluarkan MessageBox berikut
                MessageBox.Show("Email dan password harus diisi!", "Peringatan", MessageBoxButtons.OK, MessageBoxIcon.Warning);
            }
            //Kondisi untuk cek jika textBox email kosong atau tidak
            else if (string.IsNullOrEmpty(email))
            {
                //Jika kosong akan mengeluarkan MessageBox berikut
                MessageBox.Show("Email harus diisi!", "Peringatan", MessageBoxButtons.OK, MessageBoxIcon.Warning);
            }
            //Kondisi untuk cek jika textBox password kosong atau tidak
            else if (string.IsNullOrEmpty(password))
            {
                //Jika kosong akan mengeluarkan MessageBox berikut
                MessageBox.Show("Password harus diisi!", "Peringatan", MessageBoxButtons.OK, MessageBoxIcon.Warning);
            }
            //Kondisi untuk cek jika textBox konfirmasi password kosong atau tidak
            else if (string.IsNullOrEmpty(konfirmasiPass))
            {
                //Jika kosong akan mengeluarkan MessageBox berikut
                MessageBox.Show("Konfirmasi Password harus diisi!", "Peringatan", MessageBoxButtons.OK, MessageBoxIcon.Warning);
            }
            //Kondisi untuk cek jika isi password dan konfirmasi password sama atau tidak
            else if (password != konfirmasiPass)
            {
                //Jika tidak sama akan mengeluarkan MessageBox berikut
                MessageBox.Show("Password dan Konfirmasi Password harus sama!", "Peringatan", MessageBoxButtons.OK, MessageBoxIcon.Warning);
            }
            //Kondisi untuk cek jika pada email terdapat @ atau tidak
            else if (!email.Contains("@"))
            {
                //Jika tidak terdapat @ akan mengeluarkan MessageBox berikut
                MessageBox.Show("Email harus memiliki domain", "Peringatan", MessageBoxButtons.OK, MessageBoxIcon.Warning);
            }
            else
            {
                //Ketika semua kondisi sebelumnya sudah terpenuhi
                //Maka akan langsung diarahkan ke halaman login
                MessageBox.Show("Password telah berhasil di ganti!");
                menu.activateTrigger(Trigger.MASUK);
                formLogin login = new formLogin();

                //Akan menampilkan halaman login
                login.Show();

                //Akan Menutup halaman lupa password
                this.Hide();
            }
        }
    }
}
