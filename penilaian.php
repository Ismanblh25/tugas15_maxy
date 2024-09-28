<?php
// Fungsi untuk menghitung rata-rata nilai
function hitungRataRata($nilai) {
    $jumlahMataPelajaran = count($nilai); // Menghitung jumlah mata pelajaran
    $totalNilai = array_sum($nilai); // Menjumlahkan total nilai
    return $totalNilai / $jumlahMataPelajaran; // Mengembalikan hasil rata-rata
}

// Fungsi untuk menentukan keterangan kelulusan
function keteranganKelulusan($rataRata) {
    if ($rataRata >= 75) { // Jika rata-rata >= 75
        return "Lulus";
    } else { // Jika rata-rata < 75
        return "Tidak Lulus";
    }
}

// Data siswa dan nilai
$siswa = [
    ["nama" => "Budi", "nilai" => ["Matematika" => 80, "Bahasa Indonesia" => 85, "IPA" => 90]],
    ["nama" => "Ani", "nilai" => ["Matematika" => 70, "Bahasa Indonesia" => 75, "IPA" => 65]],
    ["nama" => "Citra", "nilai" => ["Matematika" => 88, "Bahasa Indonesia" => 90, "IPA" => 85]],
];

// Proses penilaian
foreach ($siswa as $data) {
    $nama = $data['nama']; // Mengambil nama siswa
    $nilaiMatpel = $data['nilai']; // Mengambil nilai-nilai dari berbagai mata pelajaran

    // Hitung rata-rata nilai
    $rataRata = hitungRataRata($nilaiMatpel);

    // Tentukan keterangan kelulusan
    $keterangan = keteranganKelulusan($rataRata);

    // Menampilkan hasil penilaian
    echo "Nama Siswa: $nama\n";
    echo "Rata-Rata Nilai: " . number_format($rataRata, 2) . "\n";
    echo "Keterangan: $keterangan\n";
    echo "--------------------------\n";
}
?>
