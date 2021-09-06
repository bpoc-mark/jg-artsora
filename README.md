# Funeyaomihachiman

##### Table of Contents

- [:pushpin: Prerequisites](#Prerequisites)
- [:rocket: Installing Hipe Asia](#Installing)
- [:computer: Usage of Hipe Asia](#Usage)
- [:mailbox: Credits](#Credits)

## <a name='Prerequisites'></a> :pushpin: Prerequisites

Before you begin, ensure you have met the following requirements:

- You have a `Windows 10` machine.
- A server `xampp` or `laragon`.
  - Recommended [laragon](https://laragon.org/download/)

| Tool      | Version | Description                                                                          |
| --------- | ------- | ------------------------------------------------------------------------------------ |
| Node      | 14.X    | Install Node                                                                         |
| Wordpress | 5.X     | Download on this link [wordpress](https://wordpress.org/) or Install via laragon app |

## <a name='Installing'></a> :rocket: Installing Astora

To install Astora in your local machine, follow this instructions

**Install Wordpress**:

- Install Wordpress via Laragon

  - Right click on laragon app. Hover on "Quick App" and click "Wordpress".
  - Input the project name and click OK. Refer on this link on how to setup [wordpress](https://wordpress.org/support/article/how-to-install-wordpress/#finishing-installation)

- Install Wordpress via downloaded file
  - Refer on this link on how to setup [wordpress](https://wordpress.org/support/article/how-to-install-wordpress/#detailed-instructions)

**Windows**:

- Go to drive C: > www > [nameofproject] > wp-content > themes.

```sh
git clone -b <your_branch> https://github.com/bpoc-mark/astora.git
```

After cloning, open your wordpress dashboard and activate the theme.

## <a name='Usage'></a>:computer: Usage of Astora

To begin the development, follow this steps listed below:

1. Open theme on VSCode
2. go to **`src/`** folder
3. run **`npm install`**
4. after the dependencies installed, run \*\*`npm start`
5. After the build executed, open the specified url address to watch live changes.

##### Code Block:

**Windows**:

```sh
cd src
npm install
npm start
```

## <a name='Credits'></a> :mailbox: Credits

- [Mark Ariel Maata](https://github.com/bpoc-mark)👩‍💻
- [Greg Arsua](https://github.com/arsua-greg)👩‍💻
- [Denver Gomez](https://github.com/bpoc-denver)👩‍💻

---

Copyright © 2021 [HiPE Inc. ltd.](https://hipe.asia/) All rights reserved
