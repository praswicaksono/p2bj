Feature:
  User bisa list paket berdasar status

Background:
  Given User sudah teregistrasi di system dengan user id "1" dengan role "skpd"

Scenario:
  When User melihat page list paket
  Then User dapat melihat paket dengan status "skpd"