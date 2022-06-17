<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Multi R</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <!-- plugin css -->
    <link href="../assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet"
        type="text/css" />

    <!-- App css -->
    <link href="../assets/css/config/default/bootstrap.min.css" rel="stylesheet" type="text/css"
        id="bs-default-stylesheet" />
    <link href="../assets/css/config/default/app.min.css" rel="stylesheet" type="text/css"
        id="app-default-stylesheet" />

    <link href="../assets/css/config/default/bootstrap-dark.min.css" rel="stylesheet" type="text/css"
        id="bs-dark-stylesheet" />
    <link href="../assets/css/config/default/app-dark.min.css" rel="stylesheet" type="text/css"
        id="app-dark-stylesheet" />

    <!-- icons -->
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />

</head>

<!-- body start -->

<style>
    img {
        width: 100%;
    }

    body {
        background: url(data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoGCBUTExcTFRUYGBcXFxkZFxcXGBcYFxgXGRcYGRcXFxkaHysjGh8oHxcZJDUkKCwuMjIyGSE3PDcwOysxMi4BCwsLDw4PHRERHTMoIykzMjExMTIxLjMxOTExMS4xMTMzMzExMTExMTMxMTExMTExMTMxMTMxMTExMTExMTExMf/AABEIAJgBSwMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAAEBQIDBgABB//EAD8QAAIBAgQEBAQDBgUCBwAAAAECEQADBBIhMQUiQVEGE2FxMoGRoUJS0RQjYnKx8BUzksHhQ1MHFiSCssLx/8QAGgEAAgMBAQAAAAAAAAAAAAAAAgMAAQQFBv/EAC8RAAICAQMDAwEIAgMAAAAAAAECABEDBBIhMUFREyKBYRQycZGhscHwBfEjQtH/2gAMAwEAAhEDEQA/APjlurQa5UqxUqS5ymvZqYSpZKqpdyCivatRKs8urqVcHUmibLGpJaom3bFVUMGVhzVitVwtCrUtCpUKzBTNQYmmRtioeSKlSWYAqGpW1NHi2KmlsGrqDBFmrkY0YuHFSbDihqFAmu1Ub5ot8KKh+zCpUGD+eakjk1cMOKvTD1KEk2+Gt+ZwVv4VB/0XP+KweJw0V9I8Lrm4XdT+C8PuxFYa9rScIHuH1McxPH4RKUqJQ0bct1K1aptCBuMCVDUwhNHsgry2gq6k3GBLhZr18LTQqKjlogIJYxWlqKrvWzTZrdD3LdXUlxSbJqJsGmwSvWtiq2iXuMStaNQ8o03e2KhcsFdY5T1oTQk3GKDZrw2KY+VoTVDVBUqzAjaiq3WjblUOKuCbgxFVsDRJFQcVJXMFdKpijGFVRVwZNKuUVXbWrQtUYYk1qc1DLUkFVcKpJDVgavAlTRKu5NstQURaFVIKuWhJhgCWEVNDVYarUSquFQnoNEWlBqsLUk0qrk2yx7FQCQauDVU9SzC2iXg6VAXKis14VqXBKiXgTUWWvbQNcRRk8QALNSIt1MGuJ6dTsOp9AK6zhbtyfLt3GymGyqTlPY9j6Upnjggm38Avmw11PVx/qQfrWFDaD2H9K1vgG3dtNdt3Ldxc0MuZTBEFTB26VlrnDr6mDZug80DI2ymCdPcVnxZBvYXGuntBlbAVO2tCrcnrRVk1pBiSBKsQKottrRV9SaiLMURPEEKCZdZ1qxkqq0pmmlrDhhQtlCC2lMkW1TdFHYzDQaEuLBqJqEbgGBsMHiuJqV3ShHua0zdJskr1GYDHKbZtMAZFCMJFU4Z4cUOX7pqRZLEAAEdZoIrTHiC80jrQ1nDMxpGN/bZh8SGFwhbXoKCxcZiB0p1jrhRMir8xSm3Z1k1eN2NlviRq7QYoYmqHonEvJgbUM5p4uLIlTVXNSuGq5opUJt1aBVaCrhUkBnEVOyleA1bbMVIUsKVFamz1FDVASrl1uirVuaqsJNMbNuNxUlgyq3Y1ojy6vRJqT2qlS90HCiosKlftkUOXNCVhh5JnipW3Boa4Sa6ypqtsvfGI2qNUG4aP4Nw9rxknLbVlDGeYzuEEamOuwqmZUUsxoCQAu21eTJ8PsPdbIiF2icq6mBuT2Go1NaCx4YQZfNuS5IORDCAbwXOrT6R86e8Os20t5EUWwAYIIDlf4ju2snWBVrhSOVjseeQHkCcokGSdvnXLz65sntTgee8149MFNt1/SU4XC2kUBLAQhlmE191eCTpTG1BLASGUwpIYEno2WecdxptNKsNIgENd1hhzqFM8oDzlJ+VXC9Dm1cYgqvKCMxYggiX1+1ZQT1bmOZOw/v8AMarcbLzggTqVGkg/EoHNB7V55yq0SPzMTy5RsGltx/cULw7iKpltySdSPiYxJJk/h361bjsWQzBUGYgFQ+iOCJJDa6g7iiWiL7xRQg1Usv8AA7V62q3UR9TlIggyNx6x2oHEeEMK8qqeW2kFJG3269u1H2sVbckEKHAR3TMSVj4XWYkDuBV6K7qCCxaTAc5AyySByztOjROmtakofduJbd/2nz3jPh27hxJi6B8RtgyvqV109aR3XG3yjse1faFXVuU6Ea5gZkCSJOkayD7jesx4i8LJic1xf3d1TJKj4xqBmBidev3rUMrDhoHBnz61cE1el/WJpViUdHggqQYZToVYbg1ZibgUj1qshDCohsgjW9tvNDi0T0mh7qFIbNINFYPHjMBvWB0bGdyxfqRPxFiNKqwtuYmtJxTBrcErGaKQXLvl8pEEGtmHVBl46yjkhRQBaW3O4orhuOBYqdZqWOw5HwjejGqIanEoZKEHwrM7AVoMKbVtQHIpHawrZc69qpxmGYwSTUGx+pqRcl8zQ4rB2zzW2HsdjSvimGiNOU7+lD2YtCS3ymrL/FQ65aAhtwK8iNUg9YoxmHQbGltw1fdUkkneqXStyAgcyEwdzVc1cyVDJRwbha1aory3VtS5VT1Fq0JVKmjsAATBqi1C5dSFnDFtqMt8OPpTO3wYxKXB9Ki+Bur+IUn1gehHzJtMps4Jh2plY2hlqjC+Ym4mmK3swgr9qW+U/Q/MMKJ4mGESKDxWJW3q1TxmLFoFh9KzmP4qt7RhFRczX0sQGIEMxPiK3tpUcLxW0/aktngj3j+5RiPzHRR/7jTrw34YRL6edctsQcxtjWY79xNaGyKFLGXjVnYAd45w+BNxM623K/mCNHvMVyYZa+m8OxS5YUaRFIPEHhUtmu4c8xljbPwn+X8p+1Z01QY0ZoyacrMrh+G+Y2VRJ3PYDufr961ODwq2ALSrBKqbjaE5hqCCNj+tIeEvcVGBHllmhs2jQnQ+kz9qfXLrAAss5vw7Zp7mJOw+lcz/ACGpORtgPA/edHSaTYoY9TLyBm2UkGZJkuY6gaQD/tUPLYBs7QWIkgKpIn4VO+umgiAOtVXLhXdlGgmNIEaKO2g+1LbnEUNzmvKdycxUmYAQDtGmtY0u+BNW3jkxzdChGKsDlCyCzKEDNlUKmzE0NZ4gQSh+AkZurnWZk69z9KW3OKIXLNcVzI1cqANAsKF9J1Pehn4/hwyglQVU5iGLFj039t/WmlWb7olBAPvd48v4rLJULlclFZ5DxB1VBvEHUxtVv7Rbti0GY5VBXmJJUb6T7HX2rN4HilrzFJZS7HmWIA1krrqBRA8RW3uZmyjMyyGAyjYEHvMfUmi2t4glJpv8VUqyC2zKylc0hGCEEAyTm7baianwzCrKcrqqwULXHLqxWWBE/mjeQazFjHszMRqjXGeUJLIXLmP5RI07dqMs47Pozahk0VjmlSI2idd/ei3lTRizgscTUnGWraG5cfMysiu7qyKzIYVtBlzR1A1iKZG8IUgzmJCCQBqC2U9xodgTWR4lfZc2W4QXKZUbKyoyAsp6lQ2WJ/iBiuxHHGcA2087NcjyyQMrou1tgB+MDWdJ0jWtS5fMytpj2hPjTgPn2vMtoGvKcwKDKLiE6rJ0JywRruPU18vx0EQdCDEHcEb+1fZ0uc5Zc4BjMgWVkiTBPTp01BHWvk3/AIg4MWMQHtrlt3gXUa6ODFwa7akH50YpjQmDUYuN35xFcxJ+Ek6V5+3Zdt6DxT6yAa9t2S2saU8IK5mIRvw/ipBkmquMYyTmj3pVkMwOlQv3SGAbaRP+9AuFd1iDU0PhnCtdbMiT3bpWhu4eGhyP+aBw3iuzYsC3bUF42EQPc1j8bxi67lmYyT8qXk0zZDY4k2mfQLlq2imSINIuMvMBdu9Zy3jbjkDMTWjsWj5YL/ekjAcTAsbhqpglxVya70CqCiLo1NBXXiupjQKJoRZO4BQ1yKjcuGqHc0y4RWeu1Qmqy1eZqu5W2EI1XLULa0QqVcqQUURZFe2koxMPSy1QqlmGvXBs7fWmNt7hHxUPhsISJOlNMKFQakUjMyV0BlqOZHzLhTQTHalN/i9xDDDWmOK4x+FQDHaquEYcYy6UZSFUSxIifQVgAAJJHEjAswC9ZRZxJvrABJjYCdBvtRXB/DqP+9vKAo2TafV/T0rUYC1Ywi3PLRRnhZ3LHoPal/GcSAoVn9W9SaYWXFVd+0bj0u420F4pjrCjIxdlGgS0cie3LvSmxicCHDeXdst/3EbNv+YHeh3Bu3RbtjMzGB29yeg9aZ3vBlyNbiz1AGlEdUqcZDV9pqGmvlB0mq4ViyltbguLdtf9xf8A7joaf2uMqilyYUD6ntXy3h9nFcPuZ8vmWm0uIuzp107034rgLreXZw8XLV0ebZLNBKje0T3UkadqsYg/uxG/pD9QD25R8z3F8YLFrkSxZmHXSZ0FU4fiOMd8llc7Fc0MAxVTJzRMgeuwmtRjvB4KW7tuFhbQa2wkl2IDgme/9DXt++uW9hbCqAoC3bh/G7fEpI25dI6ArpFIbCuC2yCaV1IzUE/1M1h/DTspu4ljeJjMEufATDa5Trv0qrE+DluE+TcRVMQrqSyaQwDTzSdZ6VqMHeuWrfMqsSZI1KL/AAgAg6fm6/aonj1mYewgXbR2Uyf5hHy+9Jx6kl7B48dviObE5XgX9RX8mYzi/hbE2rYtG4HXVlRYDmNSchEuJPfSa0XC8b+wWLdkWkdrlsO2cKpLMdSynmJEgQdgoHSmh40q62S8R8JCsBt8JnT5Ck3FcR5pzNGZo7GANlBj5n1Jp2TU9hAxaVmPvEJu+Tj1Nu8lpbmrowlMzA/Azaeok+lIbPhWy9xrf7RdtEEgpctggEjQB5AjUbjWq8QwUSYbbRmyAfTeo/4091+VrdskQzjneAN9TGg6k9BNHhdtsrLg2ngw9/BVlibdvHRcA0DIAJ9cpBHvrQl7wVj0bVmadn1ZD00YE/cV3+EWvjfFOWmSYUc3eT1r6p4P4oLtoGZ/C0fmGkx00g/OnYsq5G2/x/7M2YZMK7hzPluH8NY0OAXyHTV2ET0GpEj+4qWNvY/DgpcMquVspUxAO4DCDB0mvuit2rP8axa3S1lTh3g5XS83MdNRHSdIpmbEiiz+0Rh1rseRYnzLhvjBkhWlSCSujDKSZOg3G+h0pt4jx1rG4C64ZC1vLcKyTkI+IoY3MkR1rR4jwnYFxSuUAiGtXOdY7I+/XYz6RS29gEsFw6r5bAg22QHl2yZtnXr31rIUCm1PQ88zUzY9QpVRRIny6yiSJEgd6K4pj0KRbA0GprV3eB4Xzhcthig1Npv8struCZy/wzGnypH45uWra27Vu3bUqWY5AAQCPhMdCdde1OTICwUd5zMn+Py40LtQqKPDJR2aetDeI8DDHLrH9KnwTht52z2xAHU/0rQWLAYMH3H9mhd/TybgZz5gLjgAdxXiPO9X460PMI6AmqYGYR0roggi4Yj3w5b59RTziLk6bdI7UJwh1W1nG4FTttnUtM1zMgLZLh1K7lpR+LWleOTWjL9nWZoW4JrpKCF5jEi5qqY0Xet0M6VYhkShjUKtZahlq5UbpbFWBKvt4U1I4as3qfWa/R+kpQxRFp6r/ZqIsYX1oXyUJPT+k8u4hzsYFeNjco1k+1XXMA3TavLWEjfX7/as5dT1iHoSHDsVJOm/XrR/BeNrh7jysqwgmtZ4N8K4a9h1uXQSzyRDMAFkgAAHsPvTRPDeFw1zzLa5jlyw/MFk6kA9ay5dRhAYn8Kl4sOTeKiXCYG/fQXktEr/ANMEhRHVoJpZifDuLu3QjWymYxmJBUeuh1rZYnirJounoP8AatBwTDOEzXDLHWPyjtSNPmbI3tX5m7IGxD3TJ2fDSYa1ltQbkgs7btG49KXYjFXE+MEesVr+M8bs2WytHNQF3ErcUMFgN8MjcdxSNQw3bjz/AHzNWndgvI4maHEgdJBH0NMOFXka2ylf8lhet/w9LgX6g/M0FxjgiXmkuyN3XSpcB4PcRyRdz2wrK4YRIZSIn7/KtWiy41dWU12Ig6tFfGRG/ifxAbeH8y00NdU202jMGDZjO0An61gMHxi5aDBSEQkZ84zMHP44kE6wPp1ojF32GBsgkZlv3iCxHKEbIGaZ0zDekFzFqzLnylhlOaI2WAZGpSAPluK7GZRkYhhYmHTf8agjgzQ3cfiGtF/NDLmUEqEUDmAJLMCF9d49aR4pCRL3CSRKhnzc3YEaHffpB9qjiTautmXlJBzZGgMZksQYA+VDpbjMy3NbbDLI0yk6kldQNxpvS0xov3RXxNJyP3N/MNt3MSLbFHYBBzSV5SfUiY9ZiqDhmcAm5mcqxhmOUkA8phhlJMRrGo01Fe4sXHGXOsFTnIJgqCNW9fh2/KKswWGRLbmUz9HuAmNRACQQO8kb/chtHP8AEBmduCT+cF4ThS7jNOYwwBUtySPhnQGOpBAHqa0uFCIriTNsb6DKdbhRwCMqnMQumpzbRBV4DiL8zlyzqjhtsp8yAwWNiTrPp66C4HHEW3AX4iWEzIYAIVIJ5hqu0mrazciUgF95qMJx+wLRRrZMZCrhUkGV8xchlQSdQwgzlmN6Iu8baziGOHt+UjZ89oqwLOrMoY6DKx5ZiT3zAAjEY24878qwpaFBJEBdh/etWY3iTNdtkAZsiICGadzpLHbXeooNSnZSek+q+HPFlzzDauIUjLmR9SMwkMrDcf061Rxjjb2bt1mCPYNyGGZSVBWQWQwYJDaqTqpGhBFYRLDEOL1x7d1lD2+flPMFBd1PwkE7b5YHWmAvlbluwjecAGtgsisi23IAykggSSDOmUgiBrQZBuWmlIgDEgTeYPi4KBrLSm5tnnEHbKSZj7j1ofiOJtXrd/KGDIoLKrczsFB+E6aAqJFYLhDXbTuqPKK+VktrmhS0MQToIOnXf50+8Mm9ibzoq2xbRQWA5QdCq8xlpOZjqdSdSYFc77McbM13xQE02gIYceT/AHrAcXh7lyzcFsRcIDIA0PCsGYKZ3Kg1hMVeb1J6k7z6zrX2nh/Dct/K6hcil0GYEtMjpuKUv4KsObvmEZ7hdlMfBmJIy9ommafVLj9rjkxH+RUahgyNdD4/3PmOD8Q3bKlEgT1pol51wrXJJZiJPvXniTwncwrBmKsk6EdR6jpU7d3NaKgaAfWK2ZNhAKDvzOC4KmqmfvW2eWjXrS51gxTqy5WTGmtAXFzuSK1Y2kQmW4HFsqMtX8L4kVGUml7IVauFsztVsqmOVSesd3scDtUFvClWtSVjUo1UepA7Ro1xTVbqtA5zXeYaGjD3jxCGRah5K1QzmoZzRUYO4eI3GMau/ajQltGPSi7Vpu1JO0R4LmW28VVyX9aqRCOlSy67UpqMMboVcxbbCtX/AOHVm2Wa67zdUlfLMRlYDm9ev3rF5yOlPvAeHF3EFmBBRQV1I1mCT3rLnUDG1SkT3i59ES6FJCLA6BRoKX8Qe5Pwtr6U5wJCk5iPc0dZ4hZLakabTtPeuJhxK/LNX4zcchxn2rcW+F+DuSL10R+VT/8AI0+4zj0s22YnpoO56VXjOKWwsgg9gDXz7jPGhdxC2jLkmMq6hfeulvGNTjxcnuZnTE+offk4Amlx+IsXAFuIrabwKXcQxyKBl1UCFG0CkPE8XctHnWZ6dYpc+NZzAU1jGF3ALHidBMAXpGh4r5jhQrFmMAdya0mIZLKC2CM2hf331pZ4O4TDG++4EKPU7n++9MOLKDLdREnuJ2Per9iuAoicxs0vaYPxJ4bYnPbuaHUq0nKGMmCNgZmIpFiOBNZy3GdlSOVwoyzqOp231rVY+w1/EAqxFmfgSZcDUzrp2imfGAlw2/NClUgpbkESNvMEjUaQuw69I666hk4Y/kJzcingGJOBrbuYYLesgopYJctIquZLMDqRyGSAdCCo3BmlWM4OC6ph85ckwrp0/MxB0AG57U34r4hVSUtolxlUFlEhQnVWIJk/0j5HS+HMXhWU4hXzKFCud2Q7FXHTQb7HpV78o99UP71i7YDrPmWNwJW4RafzIRmdwmVOWSQhJ5u3bWvLnCL4V3dQI5SS0ksTpAjTvHzrT4k4W3duFXJtuZCJA100zLqNhEEVouEfs2Iwi20QBAStxSSHtuGJLHrOpM9ZmmrmJHH7RfqNfJnypcLdTVQw06QdD139+lVC5cGhHqNIIP8ACem5rY8b4LcwzhTcBDE+WRbJzgRpodxmE6daXolxWi7bcyRzKF29mINN9Q96jAx6gxNnuHXKTIjUFgJ0nbf19KiMPckGGMSAIYGNep9962a8ZwqKB5d4EHUlARp2ANSw2Lt3T+7sX31EkoF3JAEsdSYqbzXAhepfWY9MBecgBHYgaDQQNzuaJ8y/YBtk3FOq5DsCRJ0Gms7Vv7WLt2LotvZcOIJVDbZrZOsXCrQpgzEzqKOxWCtHEHELYuOLtu2HU+XoVhVf4iIIXbTUVTOCvNSDKwPE+b8NGJLFLfmCQFIHKIGuvzJ1O06VruGcMOEsgtcbNdJkrOjINFAPTmJp9xLB4VGS8me1mEFI5G7ENOhGu00z4f8As12A4zR8Jzenp3rK7eodgqOXKByYn8IYBjcF/EXi5AKorHUAmm/HL7IwKqIOgJP+1AcZw1pGUoiobebMFJLEGCpMmhf23zl1VljZutc7UK11XyJrw4loOOh7GM+OcMS9bVHtls6/5i/9MxuB86+QeIRcw9zyGGUrImIBE/EPevt3CuW2qs41E67gVlPEXCQ17MVN1DoDpy9x7V0MT+mAGExPpRkc0Z82S2rWmf8ALAEdSTQGEHMfevrKcAwwtHMgtzrMga9DWI4lwpVYrbbPr8Q7U9c68iZcmjdPwi65bSJO9QVVNMBgCohhJ/pRVrBCNqIZOJoxYuKiJrIqH7PWlTBKaqvYMCiGaG2CZ1sNUGtU9exVBsTRh7ijjidrdV5KcPhx2qr9lFXvlemZoraWh0q4Nb7UKiEiatVKxcTeRzxJsqHpXi4de1RKx0oizejpVE+IxVvqZPD2UG61byqZWVPcaGpWwW2FenCndtvTelkjvC9PxL7TYi/yoHb1Gg+Z2pk3B8R5aBQMyrBGcTp1mh8B4jCjym5ANBA6UZh+IsvNnmdQPT1rnZWINBaEMLkHeSwvCroQrcbIe4IJj07UImDTDktbHO27NqxokeI0e4ltjAZgpPQT69K0V0Ye1uVzeuppZGQWeglHIU4IsnxMsnBr+JOZtB3bT6Cj8P4XCCS0n20orG+JraCEBJ77CguHeJHv3VtwADJY9gB+sUY9y95RbMeaoRxdi3bVB/8AprK+NMY9uyAjQ7uqqeoJO/yp7jsTmbQ7VifFGMz4mzZ05n36qWBXMPaZodIu/Nfj9hBoBef7cC4ji/JA5+dgoBtgqGObmg9Ku4pxS5ct5M5PYOAQOjS0a77z0r1MBcVLloqCwbNnYSyaxNto0EDUetI8YL1pgzI25Acao+aNNNATXYx7G4B5gZFINkcRnw/h6WlGe3n8zM5a22nI8EOkwFAYenMN6KwaGy/7kFrghgyAG2UzFnSFEkP8JkaEabajcPdGdWMlAQHVWgZZBZWAEicu0daOxuOW2j/sxdFCtKIxcouYoWaV1BR5AJOpncU8NZ5gMnFVxO4nxQXPML2FUASgBVWVpjI8gBXEEgazqPWlFvieS95thHBYAXVuMArzIYN0Ox13k7amexq3r+JKEFmcFVgyY+LMw36jQabCgeLYd7d02gTCgZ8ubowMmZMgke5+lREVTxEHCoufR7PGLV2wjuCbauqup+O2SGADx01BnaJqnF3bGbJlOVtVYakyOnt2pHaW3bVD5r2zct+Y8qpCkj/Kg6MCSSCRIMDqaSvjLvmNbt3AwDEwbajLqICggwZJpJUkmjCGmm38PWMJnfzirgkeWxGTJEzoDlJ6zv0psMSqAJhbbMTnbzJt8uUEsRbzFnuRAWRExOgivkuJxDySzsW+IakjKNc0THatP4Lwi+Y95W/eW1SBoCCw+KV01Cj5OajbsaFif0gPgABmibiNpbZIs2lRmk+cELMx+MSRmZpmesmkHFMYuJu+VhbFuyyoWIDN5rMp0RVJjKwhtATBnpFe8XxyvjTdYqlxLao8Zfj5nLdAN0BO5ykUs41hRcZbqm3ZyC3JUEMMyltEEHKBBB1jYHQAXhCjliTfmWmnNBqmqtcUuCbVy8wyDmt3UtFQApIK8gmQuYcwOu2lL+N8QeyjXEKeYuUyoJRrbqMrKRGVhmBhvakiAsCzu1xymTKZyBQGylGnM3xq2oGulNjhUe2thy4822iqyLmAeSQzjpsJ7Coxx3VTSMIAuY7FcUvMxY3LhY7mflXicVvD/q3P9VMbHhu4RmdwgLMEU/E0HQ5TqJ3HvQnHODXcKR5imDsdtTrB9YpwfGTtBFxS5kJoGQ/xK6d7lz/VXWcddJg3LkfzsP8AegrTUbZtheZzAq24j1A6w2w7HRiT7kn+tPbN63yqok96WcKx+Hgs0luojYdhTG3hlufvUUj2OwrDl68gzJn1Ic+08CEG2oG0nrVbuOgpnwu3mhTbIH5jR9zg6d6djIrmGrsy9pjsQW3FUlyd61OJ4aNhQb8KPpWkFYB3eZnVTpNUXEIrQvwhxtFWLwgxzCj3KIsqxmYzGvfM9K0qcFU+lR/8vj81CXWEEaK1uGNj9KtWY2ocYa7Gt9j7J/xVow12I89o/kE1jseR+s3+mfB/SeF2J2onDKx3U/SvcPirlkalW90M/ah72NusdLmX0Fv9aG2PAqQoB1uN7bld9K9N6RE1mr9y65/zG0/hirLFq4NRcYH2mr2HqSJQfmgDGmKuR6/KhbmKMaihLti4TmN1yewWKrvYG4fxN9CKIBe5EjB+wMOsYwOGT4YExtI61Zwu7evZ7udsinKo3zEb6ntSDE8KuzuxjqJptwri9zD2RZNkkLMMu5kzqKHJiG0lKJMJMj2FYV9Zr7/AyEDKSwYTzams/jw2HOYsVbYZTze2lGW/F/8A6cSri4CRlytMTywYjasZxLHYi4+faToNzrsPes+n02Qud/AjG1AxpZ5/CMcV4lu25Jy+mbNmP0NIbHFHuYlLrnm8xTOwAzCYHQRV/wDhLyGvsMzg5UJOc/xH8vzrzDcAuB2ZuVLfMXOn8oUdWnpXVxphxg1V1OPkzvkf6eJ9itspG0mJaBI+vXerOQqJAI6iBBHrWZ8PYk3rIEssiMqnVWJ3011107Gi79y4GVlErJGQ6PlXQsfSRv6157LpzuNGjO3jAcDmE43g+Gutm8pVaAMyShMCACVj+xSbEeHraF2AZ8yFQjnMNSNVb4gw7z3pgnEycoZcpypMGQWjmI7Db615iMQAynUgbgHqYolyZkNbjGpp1PaJrHBcXbVvLKM7gfvicl22kwQJ01BIJEmPpUn8NXrlsu72s1wiGzuz/ESV+GNTE/yD1p7atC6QzDlAOnQzqPvVeMxLh4tKVUKo1ErMakGe42rSNXkI7XEnTANUz3E/D2KeC7W3dSB8bSY2mV5j+lDWuB3y83AyAwHfOGyoCMwRep1kD3rbYK05AlSWOwGp/vSiMZbUJr0nX13ApX2/IOKEjYk3Vc+bXeD4ggjy4MQJdJBgSMxOuo1+VNODYTiFtYS2C2UhmLW2EcwB0MyJmDI0HtTwqpls4nQROus6/wBPpXjsRsQOszB07etMOsdhRUfNwjo1boTFOD8GXWP74srsSQUKMAcpEGdSxOpPr86hZ8MYoAZrRbYj95bCs3USZOhmP+aOx+KdozPmIMgiAQe0gTVv+KXiApunKOg9Rr61f2jKRzUn2RhVGGcJ8PXhD31RAYy5bhDST8O3bqNdBtWnw4t20CABmXQMRt1AB3I1Op1rI4Hij5gjMSusSZynvR+Ox5Fq4V1fIcoGvPlIG3rWfJlyFgoHBi8mnI9zG4k/bPOvFr2bL5rlbeUKwtSyq9sgZmIgHeNarxXDhfs3Sq3QuZBLOG2YNnAnm5WJn5VmLXEMRKFHuKVARWNzNCtqwM9DE1quHqt5coFt7jIVZwTmCrymEkx7L3O1dDIhxUf2nmmNPY8zJ4ng7WL4tznBGZSvVZgEjofSmVvhruZyEx0Ip7jcLbcWcNcdhiEAKushnVlAyvP4tPtTThvh900a/dHuV19tKJsxNHv+BnXwZFfHtaZ+x4Ye6NLQB9dKccI8P3LX4GjqoJitNhuHRp51w/Nf0o1cLl/6r/b9KV6jnqILYcYNiJrOBufkIFWDBXF2UmmTPlnneO8D9Kmr/wAbfb9KL1WHaFsis2X62zXowp38s0ddJ/O30H6VYzQNXb6D9KIZWIkOOopuYVo+A0vv4W5OxptdvCY81h7gfpQdzMZi630H6UJzsI1MIMXXMJd6A0K2Du9m+ho27imXe60ey1X/AImP++3+kfpV+q/iN9AREl4Eb/1rmuzsT711dRemIJyMJSmY/jn+vtXoVBu+vqTXV1HtESMz+ZFEUmQ8/XT7V10wdCT8yPtE17XVW0XGFzPUgzJI00gmflVzAROZtek/qK6uqiogjK3mC3rh/N8s5n7DSogN+Vj7N+tdXVCoqQZGuVYpNDysuk6n/iicG9qyttmXMwLanIUZiMysDE8p007GurqgWxM+ryNUX2sNba8XdnbmMs65BAOpUMRoNqs4hda8pZGXIhM250IIjUzroN/SurqaRyDMZP8AEE4ZiHw5LrmM6kMwAMdVI/vStTwzjwuLAeZnYlXkxmho+RXruK6uoMuNWUues6SORS9pbjbSO7ljJzEBA0MSBrrBGwNBsv5RlAGjMwzMNO5E17XVibrNiZW8w3BXCAi59HACiQBJMc2vLHWdt6Jt4gF5JUIoKAjdmDGXnrvE9a6uoGUVD3m4Xc4sFLraJGU8jCBPKG0Gu8lT86GxWKDqM0wZYT+FySSoI0InT6V7XUsqKhKo3CZ/E3Z9h66n0+1Vm+VAkt0ZQZ2MiR6Eg/Surq0ooqOLGCHEmd/71qaXWAJBO2v2rq6mFRKLGVtiWAkwB1aYA9zReG47lQ6PzAgsCgGXbqZr2up6YUPJHeYs+Zun0mSJcMbakMGMghoEAGM2sDqfl0p34f4glsq3nFCVXMq5JLSYI1M+qmurq2NjDLzOCyAmbzh+AC33xBKFS2dcogyVC5jPUgbbCTRt1wwLK7HTTMwge3c17XViA5nSVQq0JVbt3gv7u4+g3JUz6iTULnEbwA11jqyDbtDGTXV1HtBliWYbihcAFiDtEgk/Q0PiOLqlzL5jiPw7ifU11dVjGsvcahGH40NjOn5p/rRbcTVlhXAPrBI+9e11CcaiQG+sUXOLLJGYvHoBJql8SrwCxAYbAbV1dRDGsIZGkfKtEHmadh0H3oLyQP8Akr+tdXVNgheo0//Z);
        background-size: cover;
        background-repeat: no-repeat;
        margin: 0;
        height: 100vh;
    }
</style>

<!-- Begin page -->
<div id="wrapper">

    <!-- Topbar Start -->

    <div class="navbar-custom">
        <div class="container-fluid">
            <ul class="list-unstyled topnav-menu float-end mb-0">

                <li class="d-none d-lg-block">
                    <form class="app-search">
                        <div class="app-search-box dropdown">
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="Search..." id="top-search">
                                <button class="btn input-group-text" type="submit">
                                    <i class="fe-search"></i>
                                </button>
                            </div>
                            <div class="dropdown-menu dropdown-lg" id="search-dropdown">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h5 class="text-overflow mb-2">Found 22 results</h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-home me-1"></i>
                                    <span>Analytics Report</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-aperture me-1"></i>
                                    <span>How can I help you?</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings me-1"></i>
                                    <span>User profile settings</span>
                                </a>

                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>
                <!-- ================================ search bar ==================================== -->
                <li class="dropdown d-inline-block d-lg-none">

                    <i class="fe-search noti-icon"></i>
                    </a>
                    <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                        <form class="p-3">
                            <input type="text" class="form-control" placeholder="Search ..."
                                aria-label="Recipient's username">
                        </form>
                    </div>
                </li>

                <!-- =================================  end search bar =================================-->
                <li class="dropdown d-none d-lg-inline-block topbar-dropdown">

                    <i class="fe-grid noti-icon"></i>
                    </a>
                    <div class="dropdown-menu dropdown-lg dropdown-menu-end">


                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="../assets/images/brands/bitbucket.png" alt="bitbucket">
                                    <span>Bitbucket</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </li>

                <li class="dropdown d-none d-lg-inline-block topbar-dropdown">

                    <div class="dropdown-menu dropdown-menu-end">
                    </div>
                </li>

                <li class="dropdown notification-list topbar-dropdown">

                    <i class="fe-bell noti-icon"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-lg">

                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="m-0">
                                <span class="float-end">
                                    <a href="" class="text-dark">
                                        <small>Clear All</small>
                                    </a>
                                </span>Notification
                            </h5>
                        </div>
                        <div class="noti-scroll" data-simplebar>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                <div class="notify-icon">
                                    <img src="../assets/images/users/user-1.jpg" class="img-fluid rounded-circle"
                                        alt="" />
                                </div>
                                <p class="notify-details">Cristina Pride</p>
                                <p class="text-muted mb-0 user-msg">
                                    <small>Hi, How are you? What about our next meeting</small>
                                </p>
                            </a>
                            <i class="fe-arrow-right"></i>
                            </a>
                        </div>
                </li>

                <li class="dropdown notification-list">
                    <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                        <i class="fe-settings noti-icon"></i>
                    </a>
                </li>
            </ul>
            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <!-- Mobile menu toggle (Horizontal Layout)-->

                    <style type="text/css">
                        body {
                            position: top;
                        }

                        .nav-item-left {
                            position: relative;
                            float: left;
                            width: 108px;
                            background-color: gray;
                        }

                        .nav-item {
                            position: relative;
                            float: left;
                            width: 790px;
                            background-color: gray;
                        }
                    </style>
                    <header>

                        <body data-bs-spy="scroll" data-bs-target="#navbar-example">
                            <div id="navbar-example">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a>
                                            <h2>Cerro e maco</h2>
                                        </a>
                                    </li>
                                    <li class="nav-item-left">
                                        <a class="nav-link" href="menu">Menu</a>
                                    </li>
                                    <li class="nav-item-left">
                                        <a class="nav-link" href="facturacion">Facturacion</a>
                                    </li>
                                </ul>
                            </div>
                            <br />
                        </body>
                    </header>

                    <!-- End mobile menu toggle-->
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div>
                                    <div class="b-example-divider"></div>
                                    <style type="text/css">
                                        .back {
                                            background-color: gray;

                                        }

                                        .back2 {
                                            background-color: gray;
                                        }
                                    </style>

                                    <div class="back p-3" style="width: 280px; height:540px">
                                        <a href="/"
                                            class="d-flex align-items-left pb-3 mb-3 link-dark text-decoration-none border-bottom">
                                            <svg class="bi me-2" width="30" height="24">
                                                <use xlink:href="#bootstrap" />
                                            </svg>
                                            <span class="fs-5 fw-semibold">Barra de opciones</span>
                                        </a>
                                        <ul class="list-unstyled ps-0">
                                            <li class="mb-1">
                                            <li class="mb-1">
                                                <button class="btn btn-toggle align-items-center rounded collapsed"
                                                    data-bs-toggle="collapse" data-bs-target="#dashboard-collapse"
                                                    aria-expanded="false">
                                                    Home
                                                </button>
                                                <div class="collapse" id="dashboard-collapse">
                                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                                        <li><a href="dashboard" class="link-dark rounded">Home</a>
                                                        </li>
                                                        <li><a href="reservas" class="link-dark rounded">reservas</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </li>
                                            <li class="mb-1">
                                                <button class="btn btn-toggle align-items-center rounded collapsed"
                                                    data-bs-toggle="collapse" data-bs-target="#dashboard-collapse"
                                                    aria-expanded="false">
                                                    Proveedores
                                                </button>
                                                <div class="collapse" id="dashboard-collapse">
                                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                                        <li><a href="proveedores"
                                                                class="link-dark rounded">proveedores</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="mb-1">
                                                <button class="btn btn-toggle align-items-center rounded collapsed"
                                                    data-bs-toggle="collapse" data-bs-target="#orders-collapse"
                                                    aria-expanded="false">
                                                    Direccion
                                                </button>
                                                <div class="collapse" id="orders-collapse">
                                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                                        <li><a href="direccion" class="link-dark rounded">direccion</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="border-top my-3"></li>
                                            <li class="mb-1">
                                                <button class="btn btn-toggle align-items-center rounded collapsed"
                                                    data-bs-toggle="collapse" data-bs-target="#account-collapse"
                                                    aria-expanded="false">
                                                    Account
                                                </button>
                                                <div class="collapse" id="account-collapse">
                                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                                        <li><a href="#" class="link-dark rounded">New...</a></li>
                                                        <li><a href="#" class="link-dark rounded">Profile</a></li>
                                                        <li><a href="#" class="link-dark rounded">Settings</a></li>
                                                        <li><a href="register" class="link-dark rounded">Salir</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="back2">
                                    <ul class="list-group">
                                        <!-- ============================================================== -->
                                        <!-- Start Page Content here -->
                                        <!-- ============================================================== -->
                                </div>
                                @yield('content')
                                <!-- container -->

                            </div> <!-- content -->

                            <!-- Footer Start -->
                            <footer class="footer">
                                <div class="col-md-6">
                                    <div class="text-md-end footer-links d-none d-sm-block">
                                        <a href="javascript:void(0);">About Us</a>
                                        <a href="javascript:void(0);">Help</a>
                                        <a href="javascript:void(0);">Contact Us</a>
                                    </div>
                                </div>
                        </div>
                    </div>
                    </footer>
                    <!-- end Footer -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
        </body>

</html>
