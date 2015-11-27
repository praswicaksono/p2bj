Feature:
  User dengan role tertentu bisa menolak paket

  Scenario:
    Given User sudah teregistrasi di system dengan user id "1" dengan role "pelayanan"
    And Mempunyai satu paket dengan status "pelayanan"
    When User mengklik tombol tolak
    Then Status paket harusnya berisi "skpd"

  Scenario:
    Given User sudah teregistrasi di system dengan user id "1" dengan role "distribusi"
    And Mempunyai satu paket dengan status "distribusi"
    When User mengklik tombol tolak
    Then Status paket harusnya berisi "pelayanan"

  Scenario:
    Given User sudah teregistrasi di system dengan user id "1" dengan role "kaupt"
    And Mempunyai satu paket dengan status "kaupt"
    When User mengklik tombol tolak
    Then Status paket harusnya berisi "distribusi"

  Scenario:
    Given User sudah teregistrasi di system dengan user id "1" dengan role "kaupt"
    And Mempunyai satu paket dengan status "kaupt"
    When User mengklik tombol tolak
    Then Status paket harusnya berisi "distribusi"

  Scenario:
    Given User sudah teregistrasi di system dengan user id "1" dengan role "pokja"
    And Mempunyai satu paket dengan status "pokja"
    When User mengklik tombol tolak
    Then Status paket harusnya berisi "kaupt"