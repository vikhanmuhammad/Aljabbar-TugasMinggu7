using System.Drawing;
using System.Windows.Forms;
using static System.Windows.Forms.VisualStyles.VisualStyleElement;
using System.Diagnostics.Contracts;
using System.Diagnostics;
using TextBox = System.Windows.Forms.TextBox;
using AlJabbarTrans;
using AlJabbarLibraries;
using static AlJabbarLibraries.Automata;

namespace LoginForm_AlJabbarTrans
{
    public partial class formLogin : Form
    {
        private Automata menuProsesPesan;

        public formLogin()
        {
            InitializeComponent();
            menuProsesPesan = new Automata();

            // Mengatur state awal yaitu Login
            menuProsesPesan.currentState = prosesPesan.LOGIN;
        }

        // Method buttonMasuk_Click digunakan untuk masuk ke halaman dashboard/awal dengan menggunakan validasi
        private void buttonMasuk_Click(object sender, EventArgs e)
        {
            string emailAddress = textBoxEmail.Text;
            string userPassword = textBoxPassword.Text;

            // Memastikan bahwa emailAddres dan userPassword tidak boleh kosong
            if (string.IsNullOrEmpty(emailAddress) && string.IsNullOrEmpty(userPassword))
            {
                MessageBox.Show("Email dan password harus diisi!", "Peringatan", MessageBoxButtons.OK, MessageBoxIcon.Warning);
            }
            // Memastikan bahwa emailAddres tidak boleh kosong
            else if (string.IsNullOrEmpty(emailAddress))
            {
                MessageBox.Show("Email harus diisi!", "Peringatan", MessageBoxButtons.OK, MessageBoxIcon.Warning);
            }
            // Memastikan bahwa userPassword tidak boleh kosong
            else if (string.IsNullOrEmpty(userPassword))
            {
                MessageBox.Show("Password harus diisi!", "Peringatan", MessageBoxButtons.OK, MessageBoxIcon.Warning);
            }
            // Memastikan bahwa emailAddres harus memiliki domain
            else if (!emailAddress.Contains("@"))
            {
                MessageBox.Show("Email harus memiliki domain", "Peringatan", MessageBoxButtons.OK, MessageBoxIcon.Warning);
            }
            else
            {
                prosesPesan nextState = menuProsesPesan.activateTrigger(Trigger.MASUK);
                Beranda nextDashboardApp = new Beranda(nextState);
                nextDashboardApp.Show();
                this.Hide();
            }
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        // Method formLogin_FormClosed digunakan untuk menutup formLogin
        private void formLogin_FormClosed(object sender, FormClosedEventArgs e)
        {
            // Menutup aplikasi saat formLogin ditutup
            Application.Exit();
        }

        private void textBoxEmail_TextChanged(object sender, EventArgs e)
        {

        }

        // Method buttonDaftar_Click digunakan berpindah halaman dari FormLogin ke FormRegister
        private void buttonDaftar_Click(object sender, EventArgs e)
        {
            prosesPesan nextState = menuProsesPesan.activateTrigger(Trigger.DAFTAR);
            FormRegister registerForm = new FormRegister(nextState);
            registerForm.Show();
            this.Hide();
        }

        // Method buttonDaftar_Click digunakan berpindah halaman dari FormLogin ke FormLupaPassword
        private void labelLupaPassword_Click(object sender, EventArgs e)
        {
            prosesPesan nextState = menuProsesPesan.activateTrigger(Trigger.LUPA);
            FormLupaPassword formLupaPassword = new FormLupaPassword(nextState);
            formLupaPassword.Show();
            this.Hide();
        }

        private void formLogin_Load(object sender, EventArgs e)
        {
            
        }
    }
}