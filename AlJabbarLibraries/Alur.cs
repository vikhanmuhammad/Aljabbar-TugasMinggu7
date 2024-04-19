using System.Reflection;
using System.Runtime.Serialization;

namespace AlJabbarLibraries
{
    public class Alur
    {
        public enum Pagi
        {
            [EnumMember(Value = "06:00")]
            Pukul_6,
            [EnumMember(Value = "07:00")]
            Pukul_7,
            [EnumMember(Value = "08:00")]
            Pukul_8
        }

        public enum Sore
        {
            [EnumMember(Value = "16:00")]
            Pukul_16,
            [EnumMember(Value = "17:00")]
            Pukul_17,
            [EnumMember(Value = "18:00")]
            Pukul_18
        }

        public enum Malam
        {
            [EnumMember(Value = "20:00")]
            Pukul_20,
            [EnumMember(Value = "21:00")]
            Pukul_21,
            [EnumMember(Value = "22:00")]
            Pukul_22
        }

        public enum Pemberangkatan
        {
            Pagi,
            Sore,
            Malam
        }

        public enum Bandung
        {
            Tasik,
            Cilacap,
            Magelang,
            Yogya,
            Wonogiri,
            Pacitan
        }

        public enum Jakarta
        {
            Tasik,
            Banjar,
            Pangandaran
        }

        public enum AreaType
        {
            Bandung,
            Jakarta
        }

        public List<string> PrintEnumValues<T>() where T : Enum //Untuk Print isi enum
        {
            // Membuat instance baru dari List<string> untuk menyimpan nilai-nilai enum.
            List<string> enumValues = new List<string>();

            // Mendapatkan tipe enum berdasarkan tipe generik T.
            Type enumType = typeof(T);

            // Memeriksa apakah tipe enum valid.
            if (enumType.IsEnum)
            {
                // Mendapatkan array yang berisi nama-nama nilai enum.
                string[] enumNames = Enum.GetNames(enumType);

                // Melakukan perulangan untuk setiap nama enum.
                foreach (string enumName in enumNames)
                {
                    // Menambahkan nama enum ke dalam list enumValues.
                    enumValues.Add(enumName);
                }
            }
            else
            {
                // Jika tipe data bukan enum, menambahkan pesan informasi ke dalam list enumValues.
                enumValues.Add("Tipe data bukan enum.");
            }

            // Mengembalikan list enumValues yang berisi nilai-nilai enum.
            return enumValues;
        }

        public List<string> PrintEnumValuesSpecialTime<T>() where T : Enum
        {
            // Membuat objek List<string> untuk menyimpan nilai-nilai enum
            List<string> enumValues = new List<string>();

            // Mendapatkan tipe enum dari argumen generik T
            Type enumType = typeof(T);

            // Melakukan iterasi untuk setiap nilai dalam enumType
            foreach (var enumValue in Enum.GetValues(enumType))
            {
                // Mengkonversi nilai enum menjadi string
                string enumName = enumValue.ToString();

                // Mendapatkan informasi anggota enum (memberInfo) berdasarkan nama enum
                MemberInfo memberInfo = enumType.GetMember(enumName)[0];

                // Mengambil atribut EnumMemberAttribute dari anggota enum
                var enumMember = memberInfo.GetCustomAttribute<EnumMemberAttribute>();

                // Mendapatkan nilai khusus dari atribut EnumMemberAttribute jika tersedia
                string enumMemberValue = enumMember?.Value;

                // Jika nilai khusus tidak kosong atau null, tambahkan ke daftar nilai enum
                if (!string.IsNullOrEmpty(enumMemberValue))
                {
                    enumValues.Add(enumMemberValue);
                }
            }

            // Mengembalikan daftar nilai enum
            return enumValues;
        }

        // Untuk mendapatkan tarif berdasarkan input comboBox dan enum
        public int getHarga(ComboBox comboBox1, ComboBox comboBox2, ComboBox comboBox3) { 
            // Mengambil nilai indeks dari comboBox1 dan mengkonversinya ke tipe enum AreaType
            AreaType kantorAsal = (AreaType)comboBox1.SelectedIndex;

            // Mengambil nilai indeks dari comboBox2
            int tujuanChoice = comboBox2.SelectedIndex;

            // Memeriksa nilai enum kantorAsal
            if (kantorAsal == AreaType.Bandung)
            {
                // Jika kantorAsal adalah Bandung, deklarasikan dan inisialisasikan array tarif
                int[] tarif = { 100000, 120000, 140000, 160000, 180000, 200000 };

                // Menghitung harga dengan mengambil tarif sesuai tujuanChoice dan mengalikannya dengan indeks comboBox3
                return tarif[tujuanChoice] * comboBox3.SelectedIndex;
            }
            else if (kantorAsal == AreaType.Jakarta)
            {
                // Jika kantorAsal adalah Jakarta, deklarasikan dan inisialisasikan array tarif
                int[] tarif = { 100000, 120000, 140000 };

                // Menghitung harga dengan mengambil tarif sesuai tujuanChoice dan mengalikannya dengan indeks comboBox3
                return tarif[tujuanChoice] * comboBox3.SelectedIndex;
            }

            // Jika tidak ada kondisi yang memenuhi, kembalikan nilai 0
            return 0;
        }

        // Untuk mendapatkan kode bus berdarkan pilihan comboBox dan enum
        public string getKodeBus(ComboBox comboBox1, ComboBox comboBox2)
        {
            // Mengambil nilai pilihan dari combo box
            Pemberangkatan pemberangkatan = (Pemberangkatan)comboBox1.SelectedIndex;
            int kodeBis = comboBox2.SelectedIndex;

            // Memeriksa pilihan pemberangkatan
            if (pemberangkatan == Pemberangkatan.Pagi)
            {
                // Array yang berisi kode bis untuk pemberangkatan pagi
                string[] bis = { "JT001", "JT002", "JT003" };
                return bis[kodeBis]; // Mengembalikan kode bis sesuai dengan pilihan
            }
            else if (pemberangkatan == Pemberangkatan.Sore)
            {
                // Array yang berisi kode bis untuk pemberangkatan sore
                string[] bis = { "JT004", "JT005", "JT006" };
                return bis[kodeBis]; // Mengembalikan kode bis sesuai dengan pilihan
            }
            else if (pemberangkatan == Pemberangkatan.Malam)
            {
                // Array yang berisi kode bis untuk pemberangkatan malam
                string[] bis = { "JT007", "JT008", "JT009" };
                return bis[kodeBis]; // Mengembalikan kode bis sesuai dengan pilihan
            }

            return ""; // Mengembalikan string kosong jika tidak ada pilihan yang sesuai
        }

    }
}