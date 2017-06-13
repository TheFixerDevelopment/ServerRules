![ServerRules](http://preview.ibb.co/fnsoha/IMG_0028.png)

Many of us (including myself) put the server rules on signs. That's a matter of the past, because now, whatever it is, there will be no way for server rules to be lost. ServerRules is a plugin for PocketMine-MP that allows you to list the rules in the **/rules** command. They must be added, each one, in the **config.yml**. You can add as many rules as you want.~~Up to 8 rules can be added~~

```yml
# Enter the server rules below between the quotation marks
rules:
 - "1.-"
 - "2.-"
 - "3.- "
 - "4.- "
 - "5.- "
 
# You can add rules inserting a space and then - ""
# If you want to remove rules remove the whole line
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

## Client

If you are a client of a MCPE server hosting service, **ServerRules** may be one more plugin in the *quick download* list, if not, you can suggest them to add it so you can use it on your server, in exchange for a small commission, if so.

Otherwise or if you were unable to follow download method **1**, you can check if your hosting service gives you FTP access to the server files; if so please go to *Releases* and preferably look for the latest available release to download the plugin in *.phar* format, and finally upload it in the *plugins/* folder.
 
## Developer

### Step 1. Clone this repository

Via ```git``` in the terminal (Shell access required)

```sh
git --recursive clone https://github.com/kenygamer/ServerRules
```

### Step 2. Compile it to get a single PHAR file

Compile the files obtained after performing the `git clone`. You can use the *sunnyct's* console application [View phar compiler](https://github.com/sunnyct/phar-compiler) that will allow you to complete this step.

### Step 3. Upload PHAR file and start the server

Upload the compressed file to the *plugins/* folder and restart the server. The plugin should be enabled and run without problems. If so, you can submit an issue and I'll try to fix it as soon as possible.

### Version tests
- [X] Version 1.0.0
- [ ] Version 1.3.0
