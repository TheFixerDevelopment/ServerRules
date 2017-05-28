![ServerRules](http://preview.ibb.co/fnsoha/IMG_0028.png)

Many of us (including myself) put the server rules on signs. That's a matter of the past, because now, whatever it is, there will be no way for server rules to be lost. ServerRules is a plugin for PocketMine-MP that allows you to list the rules in the **/rules** command. They must be added, each one, in the **config.yml**. Up to 8 rules can be added.

```yml
# Enter the server rules below between the quotation marks
rule1: "1."
rule2: "2."
rule3: "3."
rule4: "4."
rule5: "5."
rule6: "6."
rule7: "7."
rule8: "8."
# Please do not try to add more rules, otherwise there will be problems loading the file information
...
```

# Commands
| Command | Usage | Description |
| ------- |  ----- | ----------- |
| `/rules` | `/rules` | Displays all server rules listed in the config.yml |

# Permissions
```yml
 command.rules:
  default: true
  ```
  
  | Default | Description |
  | ------- | ----------- |
  | ```false``` | Nobody including OPs can use the command |
  | ``` true ``` | Everyone can use the command |
  | ``` op ``` | Only OPs can use the command |

The *default* can be overridden by using a permission handler.

# Download

## User

As a user or client, your MCPE hosting service may allow you to perform a "*quick install*". This means that you could be charged a small commission to enable it.

## Developer

Download **ServerRules** and have your server rules listed in one place. There will be no way to get lost. Your players will have to use **/rules** and they will get the list of rules.

### Step 1. Clone this repository

Via ```git``` in the terminal, or using the download button.

```sh
git clone https://github.com/kenygamer/ServerRules
```

### Step 2. Compile it to .phar extension

Compile the files by creating a single file with .phar extension. You can use [PocketMine Tools](https://pmt.mcpe.fun).

### Step 3. Upload .phar and start server

Upload the .phar file to the *plugins/* folder, and run the start script. It is assumed that the server is off.

- Tested on API **1.8.0**
