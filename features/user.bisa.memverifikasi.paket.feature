Feature:
  User dengan role tertentu bisa memverifikasi paket

  Scenario:
    Given User sudah teregistrasi di system dengan user id "1" dengan role "pelayan"
    And Mempunyai satu paket dengan status "pelayanan"
    When User mengklik tombol verifikasi
    Then Status paket harusnya berisi "distribusi"

  Scenario:
    Given User sudah teregistrasi di system dengan user id "1" dengan role "distribusi"
    And Mempunyai satu paket dengan status "distribusi"
    When User mengklik tombol verifikasi
    Then Status paket harusnya berisi "kaupt"

  Scenario:
    Given User sudah teregistrasi di system dengan user id "1" dengan role "kaupt"
    And Mempunyai satu paket dengan status "kaupt"
    When User mengklik tombol verifikasi
    Then Status paket harusnya berisi "pokja"

  Scenario:
    Given User sudah teregistrasi di system dengan user id "1" dengan role "pokja"
    And Mempunyai satu paket dengan status "pokja"
    When User mengklik tombol verifikasi
    Then Status paket harusnya berisi "ok"