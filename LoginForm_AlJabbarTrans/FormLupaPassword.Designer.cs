namespace AlJabbarTrans
{
    partial class FormLupaPassword
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            textBoxEmail = new TextBox();
            labelLogin = new Label();
            labelEmail = new Label();
            label1 = new Label();
            textBoxPassword = new TextBox();
            label2 = new Label();
            textBoxKonfirmasiPass = new TextBox();
            buttonSimpan = new Button();
            label3 = new Label();
            SuspendLayout();
            // 
            // textBoxEmail
            // 
            textBoxEmail.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            textBoxEmail.Location = new Point(12, 125);
            textBoxEmail.Name = "textBoxEmail";
            textBoxEmail.Size = new Size(224, 29);
            textBoxEmail.TabIndex = 0;
            // 
            // labelLogin
            // 
            labelLogin.AutoSize = true;
            labelLogin.Font = new Font("Segoe UI", 13.8F, FontStyle.Bold, GraphicsUnit.Point);
            labelLogin.ForeColor = Color.White;
            labelLogin.Location = new Point(19, 47);
            labelLogin.Name = "labelLogin";
            labelLogin.Size = new Size(154, 25);
            labelLogin.TabIndex = 11;
            labelLogin.Text = "Lupa Password?";
            labelLogin.TextAlign = ContentAlignment.TopCenter;
            // 
            // labelEmail
            // 
            labelEmail.AutoSize = true;
            labelEmail.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            labelEmail.ForeColor = SystemColors.Control;
            labelEmail.Location = new Point(12, 101);
            labelEmail.Name = "labelEmail";
            labelEmail.Size = new Size(123, 21);
            labelEmail.TabIndex = 14;
            labelEmail.Text = "Masukkan Email";
            // 
            // label1
            // 
            label1.AutoSize = true;
            label1.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            label1.ForeColor = SystemColors.Control;
            label1.Location = new Point(12, 157);
            label1.Name = "label1";
            label1.Size = new Size(151, 21);
            label1.TabIndex = 15;
            label1.Text = "Masukkan Password";
            // 
            // textBoxPassword
            // 
            textBoxPassword.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            textBoxPassword.Location = new Point(12, 181);
            textBoxPassword.Name = "textBoxPassword";
            textBoxPassword.Size = new Size(224, 29);
            textBoxPassword.TabIndex = 16;
            textBoxPassword.UseSystemPasswordChar = true;
            // 
            // label2
            // 
            label2.AutoSize = true;
            label2.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            label2.ForeColor = SystemColors.Control;
            label2.Location = new Point(12, 213);
            label2.Name = "label2";
            label2.Size = new Size(155, 21);
            label2.TabIndex = 17;
            label2.Text = "Konfirmasi Password";
            // 
            // textBoxKonfirmasiPass
            // 
            textBoxKonfirmasiPass.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            textBoxKonfirmasiPass.Location = new Point(12, 237);
            textBoxKonfirmasiPass.Name = "textBoxKonfirmasiPass";
            textBoxKonfirmasiPass.Size = new Size(224, 29);
            textBoxKonfirmasiPass.TabIndex = 18;
            textBoxKonfirmasiPass.UseSystemPasswordChar = true;
            // 
            // buttonSimpan
            // 
            buttonSimpan.BackColor = Color.FromArgb(25, 167, 206);
            buttonSimpan.ForeColor = Color.White;
            buttonSimpan.Location = new Point(12, 288);
            buttonSimpan.Name = "buttonSimpan";
            buttonSimpan.Size = new Size(224, 23);
            buttonSimpan.TabIndex = 19;
            buttonSimpan.Text = "Simpan";
            buttonSimpan.UseVisualStyleBackColor = false;
            buttonSimpan.Click += buttonSimpan_Click;
            // 
            // label3
            // 
            label3.AutoSize = true;
            label3.Font = new Font("Segoe UI", 9F, FontStyle.Regular, GraphicsUnit.Point);
            label3.ForeColor = SystemColors.Control;
            label3.Location = new Point(19, 72);
            label3.Name = "label3";
            label3.Size = new Size(201, 15);
            label3.TabIndex = 20;
            label3.Text = "Masukkan email dengan akun terkait";
            // 
            // FormLupaPassword
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            BackColor = Color.FromArgb(17, 109, 110);
            ClientSize = new Size(252, 373);
            ControlBox = false;
            Controls.Add(label3);
            Controls.Add(buttonSimpan);
            Controls.Add(textBoxKonfirmasiPass);
            Controls.Add(label2);
            Controls.Add(textBoxPassword);
            Controls.Add(label1);
            Controls.Add(labelEmail);
            Controls.Add(labelLogin);
            Controls.Add(textBoxEmail);
            MaximizeBox = false;
            MinimizeBox = false;
            Name = "FormLupaPassword";
            StartPosition = FormStartPosition.CenterScreen;
            Text = "FormLupaPassword";
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private TextBox textBoxEmail;
        private Label labelLogin;
        private Label labelEmail;
        private Label label1;
        private TextBox textBoxPassword;
        private Label label2;
        private TextBox textBoxKonfirmasiPass;
        private Button buttonSimpan;
        private Label label3;
    }
}