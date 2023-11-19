class FormTempDatabase {
   #tempData;
   constructor() {
      // tempData;

      this.#tempData = {
         asesmen_ppks: {},
         asesmen_biodata_ppks: {
            jumlah_anak: 0
         },
         asesmen_kepemilikan_adminduk: {},
         asesmen_riwayat_bantuan: {},
         asesmen_kondisi_biologis: {},
         asesmen_kondisi_sosial: {},
         asesmen_aspek_akademis: {},
         asesmen_kondisi_ekonomi: {},
         asesmen_data_keluarga: {},
         asesmen_detail_data_keluarga_anak_n: [],
         asesmen_diagnosa_layanan_intervensi: {},
      }
   }

   handleAsesmenPPKS(field, value) {
      this.#tempData.asesmen_ppks[field] = value;
   }

   handleAsesmenBiodataPPKS(field, value) {
      this.#tempData.asesmen_biodata_ppks[field] = value;
   }

   handleAsesmenKepemilikanAdminduk(field, value) {
      this.#tempData.asesmen_kepemilikan_adminduk[field] = value;
   }

   handleAsesmenRiwayatBantuan(field, value) {
      this.#tempData.asesmen_riwayat_bantuan[field] = value;
   }

   handleAsesmenKondisiBiologis(field, value) {
      this.#tempData.asesmen_kondisi_biologis[field] = value;
   }

   handleAsesmenKondisiSosial(field, value) {
      this.#tempData.asesmen_kondisi_sosial[field] = value;
   }

   handleAsesmenAspekAkademis(field, value) {
      this.#tempData.asesmen_aspek_akademis[field] = value;
   }

   handleAsesmenKondisiEkonomi(field, value) {
      this.#tempData.asesmen_kondisi_ekonomi[field] = value;
   }

   handleAsesmenDataKeluarga(field, value) {
      this.#tempData.asesmen_data_keluarga[field] = value;
   }

   handleAsesmenDetailDataKeluargaAnakN(field, value) {
      this.#tempData.asesmen_detail_data_keluarga_anak_n.push({ [field]: value });
      console.info(this.#tempData.asesmen_detail_data_keluarga_anak_n)
   }

   handleAsesmenDiagnosaLayananIntervensi(field, value) {
      this.#tempData.asesmen_diagnosa_layanan_intervensi[field] = value;
   }

   get getTempData() {
      return this.#tempData;
   }

}