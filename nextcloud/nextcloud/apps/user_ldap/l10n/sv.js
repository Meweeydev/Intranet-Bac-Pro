OC.L10N.register(
    "user_ldap",
    {
    "Failed to clear the mappings." : "Fel vid rensning av mappningar",
    "Failed to delete the server configuration" : "Det gick inte att ta bort serverkonfigurationen",
    "Invalid configuration: Anonymous binding is not allowed." : "Ogiltig konfiguration: Anonym bindning är inte tillåten.",
    "Valid configuration, connection established!" : "Giltig konfiguration, anslutning upprättad!",
    "Valid configuration, but binding failed. Please check the server settings and credentials." : "Giltig konfiguration, men bindning misslyckades. Vänligen kontrollera uppgifter och serverinställningarna.",
    "Invalid configuration. Please have a look at the logs for further details." : "Ogiltig konfiguration. Vänligen undersök loggar för mer detaljer.",
    "No action specified" : "Ingen åtgärd har angetts",
    "No configuration specified" : "Ingen konfiguration har angetts",
    "No data specified" : "Inga data har angetts",
    " Could not set configuration %s" : "Kunde inte sätta inställning %s",
    "Action does not exist" : "Åtgärd finns inte",
    "Renewing …" : "Förnyar ...",
    "Very weak password" : "Väldigt svagt lösenord",
    "Weak password" : "Svagt lösenord",
    "So-so password" : "Mindre bra lösenord",
    "Good password" : "Bra lösenord",
    "Strong password" : "Starkt lösenord",
    "The Base DN appears to be wrong" : "Den grundläggande DN verkar vara fel",
    "Testing configuration…" : "Testar konfiguration...",
    "Configuration incorrect" : "Felaktig konfiguration",
    "Configuration incomplete" : "Konfiguration ofullständig",
    "Configuration OK" : "Konfigurationen är OK",
    "Select groups" : "Välj grupper",
    "Select object classes" : "Välj objekt-klasser",
    "Please check the credentials, they seem to be wrong." : "Vänligen kontrollera dina uppgifter, de verkar vara fel.",
    "Please specify the port, it could not be auto-detected." : "Vänligen ange porten, den kunde inte upptäckas automatiskt.",
    "Base DN could not be auto-detected, please revise credentials, host and port." : "Grundläggande DN kunde inte upptäckas automatiskt, dubbelkolla dina uppgifter, värd och port.",
    "Could not detect Base DN, please enter it manually." : "Kunde inte upptäcka Base DN, ange det manuellt.",
    "{nthServer}. Server" : "{nthServer}. Server",
    "No object found in the given Base DN. Please revise." : "Inget objekt funnet i den givna Base DN. Vänligen granska.",
    "More than 1,000 directory entries available." : "Mer än 1,000 katalogposter tillgängliga.",
    "_{objectsFound} entry available within the provided Base DN_::_{objectsFound} entries available within the provided Base DN_" : ["{objectsFound} post tillgänglig inom den medföljande Base DN","{objectsFound} poster tillgängliga inom den medföljande Base DN"],
    "An error occurred. Please check the Base DN, as well as connection settings and credentials." : "Ett fel uppstod. Kontrollera Base DN, och även anslutningsinställningar och referenser.",
    "Do you really want to delete the current Server Configuration?" : "Vill du verkligen ta bort den nuvarande serverinställningen?",
    "Confirm Deletion" : "Bekräfta radering",
    "Mappings cleared successfully!" : "Rensning av mappningar lyckades!",
    "Error while clearing the mappings." : "Fel uppstod under rensning av mappningar",
    "Anonymous bind is not allowed. Please provide a User DN and Password." : "Anonym bindning inte tillåten. Ange en användar-DN och lösenord.",
    "LDAP Operations error. Anonymous bind might not be allowed." : "LDAP Operations error. Anonym bindning kanske inte längre tillåts.",
    "Saving failed. Please make sure the database is in Operation. Reload before continuing." : "Sparandet misslyckades. Kontrollera att databasen är verksam. Uppdatera innan du fortsätter.",
    "Switching the mode will enable automatic LDAP queries. Depending on your LDAP size they may take a while. Do you still want to switch the mode?" : "Byte av läge kommer aktivera automatiska LDAP förfrågningar. Beroende på din LDAP storlek kan de ta ett tag. Vill du fortfarande ändra läge?",
    "Mode switch" : "Lägesändring",
    "Select attributes" : "Välj attribut",
    "User not found. Please check your login attributes and username. Effective filter (to copy-and-paste for command-line validation): <br/>" : "Användaren hittades inte. Vänligen kontrollera dina inloggningsattribut och användarnamn. Effektivt filter (för att kopiera och klistra in för kommandoradsvalidering): <br/>",
    "User found and settings verified." : "Användare hittad och inställnings bekräftade.",
    "Consider narrowing your search, as it encompassed many users, only the first one of whom will be able to log in." : "Överväg att specificera din sökning eftersom den resulterade i många användare och bara den första kommer att kunna logga in.",
    "An unspecified error occurred. Please check log and settings." : "Ett ospecificerat fel inträffade. Vänligen kontrollera loggen och inställningarna.",
    "The search filter is invalid, probably due to syntax issues like uneven number of opened and closed brackets. Please revise." : "Sökfiltret är ogiltigt, troligen på grund av syntaxproblem som ojämnt antal öppna och slutna klamrar. Vänligen granska.",
    "Please provide a login name to test against" : "Ange ett inloggningsnamn att försöka ansluta med",
    "Password change rejected. Hint: " : "Lösenordsbyte nekad. Anledning/tips: ",
    "Please login with the new password" : "Vänligen logga in med det nya lösenordet",
    "LDAP User backend" : "LDAP användarbackend",
    "Your password will expire tomorrow." : "Ditt lösenord kommer att gå ut imorgon.",
    "Your password will expire today." : "Ditt lösenord kommer att gå ut idag.",
    "_Your password will expire within %n day._::_Your password will expire within %n days._" : ["Ditt lösenord kommer gå ut inom %n dag.","Ditt lösenord kommer gå ut inom %n dagar."],
    "Could not detect user display name attribute. Please specify it yourself in advanced LDAP settings." : "Kunde inte upptäcka ditt visningsnamnsattribut. Vänligen specificera det själv i avancerade inställningar för LDAP.",
    "Could not find the desired feature" : "Det gick inte hitta den önskade funktionen",
    "Invalid Host" : "Felaktig värd",
    "LDAP user and group backend" : "LDAP-användare och gruppbackend",
    "This application enables administrators to connect Nextcloud to an LDAP-based user directory." : "Den här applikationen gör det möjligt för administratörer att ansluta Nextcloud till en LDAP-baserad användarkatalog.",
    "This application enables administrators to connect Nextcloud to an LDAP-based user directory for authentication and provisioning users, groups and user attributes. Admins can configure this application to connect to one or more LDAP directories or Active Directories via an LDAP interface. Attributes such as user quota, email, avatar pictures, group memberships and more can be pulled into Nextcloud from a directory with the appropriate queries and filters.\n\nA user logs into Nextcloud with their LDAP or AD credentials, and is granted access based on an authentication request handled by the LDAP or AD server. Nextcloud does not store LDAP or AD passwords, rather these credentials are used to authenticate a user and then Nextcloud uses a session for the user ID. More information is available in the LDAP User and Group Backend documentation." : "Den här applikationen gör det möjligt för administratörer att ansluta Nextcloud till en LDAP-baserad användarkatalog för autentisering och provisioning av användare, grupper och användarattribut. Admins kan konfigurera den här applikationen för att ansluta till en eller flera LDAP-kataloger eller AD via ett LDAP-gränssnitt. Attribut som användarkvot, e-post, avatarbilder, gruppmedlemskap och mer kan hämtas in till Nextcloud från en katalog med relevanta frågor och filter.\n\nEn användare loggar in i Nextcloud med sina LDAP- eller AD-referenser, och beviljas åtkomst baserat på en autentiseringsbegäran som hanteras av LDAP- eller AD-servern. Nextcloud lagrar inte LDAP- eller AD-lösenord, utan dessa referenser används för att verifiera en användare och Nextcloud använder en session för användar-ID. Mer information finns i dokumentationen för LDAP User and Group Backend.",
    "Test Configuration" : "Testa konfigurationen",
    "Help" : "Hjälp",
    "Groups meeting these criteria are available in %s:" : "Grupper som uppfyller dessa kriterier finns i %s:",
    "Only these object classes:" : "Endast dessa objektklasser:",
    "Only from these groups:" : "Endast från dessa grupper:",
    "Search groups" : "Sökgrupper",
    "Available groups" : "Tillgängliga grupper",
    "Selected groups" : "Valda grupper",
    "Edit LDAP Query" : "Redigera LDAP-förfrågan",
    "LDAP Filter:" : "LDAP Filter:",
    "The filter specifies which LDAP groups shall have access to the %s instance." : "Filtret specificerar vilka LDAD-grupper som ska ha åtkomst till %s instans",
    "Verify settings and count the groups" : "Verifiera inställningar och räkna grupperna",
    "When logging in, %s will find the user based on the following attributes:" : "Vid inloggning, %s kan hitta användaren baserat på följande attribut:",
    "Allows login against an email attribute. \"mail\" and \"mailPrimaryAddress\" allowed." : "Tillåter inloggning mot ett e-post-attribut. \"mail\" och \"mailPrimaryAddress\" tillåtna.",
    "Other Attributes:" : "Övriga attribut:",
    "Defines the filter to apply, when login is attempted. \"%%uid\" replaces the username in the login action. Example: \"uid=%%uid\"" : "Definierar filtret som ska appliceras vid inloggningsförsök. \"%%uid\" ersätter användarnamnet i inloggningshändelsen. Exempel: \"uid=%%uid\"",
    "Test Loginname" : "Testa inloggningsnamn",
    "Verify settings" : "Verifiera inställningar",
    "%s. Server:" : "%s. Server:",
    "Add a new configuration" : "Lägg till en ny konfiguration",
    "Copy current configuration into new directory binding" : "Kopiera nuvarande konfiguration till en ny katalogsammansättning",
    "Delete the current configuration" : "Ta bort nuvarande konfiguration",
    "Host" : "Server",
    "You can omit the protocol, unless you require SSL. If so, start with ldaps://" : "Du kan utelämna protokollen, om du inte kräver SSl. I såna fall, starta med ldaps://",
    "Port" : "Port",
    "Detect Port" : "Upptäck Port",
    "User DN" : "Användar-DN",
    "The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." : "DN för klientanvändaren som bindningen ska göras, t.ex. uid=agent, dc=example, dc=com. För anonym åtkomst, lämna DN och lösenord tomma.",
    "Password" : "Lösenord",
    "For anonymous access, leave DN and Password empty." : "För anonym åtkomst, lämna DN och lösenord tomma.",
    "Save Credentials" : "Spara Uppgifter",
    "One Base DN per line" : "Ett start-DN per rad",
    "You can specify Base DN for users and groups in the Advanced tab" : "Du kan ange start-DN för användare och grupper under fliken Avancerat",
    "Detect Base DN" : "Upptäck bas-DN",
    "Test Base DN" : "Testa Bas-DN",
    "Avoids automatic LDAP requests. Better for bigger setups, but requires some LDAP knowledge." : "Undviker automatiska LDAP-förfrågningar. Bättre för större installationer, men kräver en del LDAP-kunskap.",
    "Manually enter LDAP filters (recommended for large directories)" : "Ange LDAP-filter manuellt (rekommenderat för stora kataloger)",
    "Listing and searching for users is constrained by these criteria:" : "Listning och sökning av användare är begränsade efter dessa kriterier:",
    "The most common object classes for users are organizationalPerson, person, user, and inetOrgPerson. If you are not sure which object class to select, please consult your directory admin." : "De mest vanliga objektklasserna för användare är organizationalPerson, person, user och inetOrgPerson. Om du inte är säker vilken objektklass som ska väljas, hör med din mappadministratör.",
    "The filter specifies which LDAP users shall have access to the %s instance." : "Filtret specificerar vilka LDAP-användare som skall ha åtkomst till %s instans",
    "Verify settings and count users" : "Verifiera inställningar och räkna användare",
    "Saving" : "Sparar",
    "Back" : "Tillbaka",
    "Continue" : "Fortsätt",
    "Please renew your password." : "Vänligen förnya ditt lösenord.",
    "An internal error occurred." : "Ett internt fel inträffade.",
    "Please try again or contact your administrator." : "Vänligen försök igen eller kontakta din administratör.",
    "Current password" : "Nuvarande lösenord",
    "New password" : "Nytt lösenord",
    "Renew password" : "Förnya lösenord",
    "Wrong password." : "Fel lösenord.",
    "Cancel" : "Avbryt",
    "Server" : "Server",
    "Users" : "Användare",
    "Login Attributes" : "Inloggningsattribut",
    "Groups" : "Grupper",
    "Expert" : "Expert",
    "Advanced" : "Avancerad",
    "<b>Warning:</b> The PHP LDAP module is not installed, the backend will not work. Please ask your system administrator to install it." : "<b>Varning:</b> PHP LDAP-modulen är inte installerad, backend kommer inte att fungera. Be din systemadministratör att installera den.",
    "Connection Settings" : "Uppkopplingsinställningar",
    "Configuration Active" : "Konfiguration aktiv",
    "When unchecked, this configuration will be skipped." : "Ifall denna är avbockad så kommer konfigurationen att skippas.",
    "Backup (Replica) Host" : "Säkerhetskopierings-värd (Replika)",
    "Give an optional backup host. It must be a replica of the main LDAP/AD server." : "Ange en valfri värd för säkerhetskopiering. Den måste vara en replika av den huvudsakliga LDAP/AD-servern",
    "Backup (Replica) Port" : "Säkerhetskopierings-port (Replika)",
    "Disable Main Server" : "Inaktivera huvudserver",
    "Only connect to the replica server." : "Anslut endast till replikaservern.",
    "Turn off SSL certificate validation." : "Stäng av verifiering av SSL-certifikat.",
    "Not recommended, use it for testing only! If connection only works with this option, import the LDAP server's SSL certificate in your %s server." : "Rekommenderas inte, använd endast för test! Om anslutningen bara fungerar med denna inställning behöver du importera LDAP-serverns SSL-certifikat till din %s server.",
    "Cache Time-To-Live" : "Cache Time-To-Live",
    "in seconds. A change empties the cache." : "i sekunder. En förändring tömmer cachen.",
    "Directory Settings" : "Mappinställningar",
    "User Display Name Field" : "Attribut för användarnamn",
    "The LDAP attribute to use to generate the user's display name." : "LDAP-attributet som ska användas för att generera användarens visningsnamn.",
    "2nd User Display Name Field" : "2:a Visningsnamns Fält",
    "Optional. An LDAP attribute to be added to the display name in brackets. Results in e.g. »John Doe (john.doe@example.org)«." : "Frivilligt. Ett LDAP-attribut att läggas till visningsnamnet i parentes. Resulterar i t.ex. »John Doe (john.doe@example.org)«.",
    "Base User Tree" : "Bas för användare i katalogtjänst",
    "One User Base DN per line" : "En användarstart-DN per rad",
    "User Search Attributes" : "Användarsökningsattribut",
    "Optional; one attribute per line" : "Valfritt; ett attribut per rad",
    "Group Display Name Field" : "Attribut för gruppnamn",
    "The LDAP attribute to use to generate the groups's display name." : "LDAP-attributet som ska användas för att generera gruppens visningsnamn.",
    "Base Group Tree" : "Bas för grupper i katalogtjänst",
    "One Group Base DN per line" : "En gruppstart-DN per rad",
    "Group Search Attributes" : "Gruppsökningsattribut",
    "Group-Member association" : "Attribut för gruppmedlemmar",
    "Dynamic Group Member URL" : "Dynamisk gruppmedlemswebbadress",
    "The LDAP attribute that on group objects contains an LDAP search URL that determines what objects belong to the group. (An empty setting disables dynamic group membership functionality.)" : "LDAP-attributen som på gruppobjekt innehåller en LDAP-sökwebbadress som bestämmer vilka objekt som tillhör gruppen. (En tom inställning inaktiverar funktionaliteten dynamisk gruppmedlemskap)",
    "Nested Groups" : "Undergrupper",
    "When switched on, groups that contain groups are supported. (Only works if the group member attribute contains DNs.)" : "När den är påslagen, stöds grupper som innehåller grupper. (Fungerar endast om gruppmedlemmens attribut innehåller DN.)",
    "Paging chunksize" : "\"Paging chunksize\"",
    "Chunksize used for paged LDAP searches that may return bulky results like user or group enumeration. (Setting it 0 disables paged LDAP searches in those situations.)" : "Klusterstorlek som används för paged LDAP-sökningar som kan komma att returnera skrymmande resultat som uppräknande av användare eller grupper. (Inställning av denna till 0 inaktiverar paged LDAP-sökningar i de situationerna)",
    "Enable LDAP password changes per user" : "Aktivera: Antal tillåtna lösenordsbyten för LDAP-användare",
    "Allow LDAP users to change their password and allow Super Administrators and Group Administrators to change the password of their LDAP users. Only works when access control policies are configured accordingly on the LDAP server. As passwords are sent in plaintext to the LDAP server, transport encryption must be used and password hashing should be configured on the LDAP server." : "Tillåt LDAP-användare att ändra sina lösenord och tillåt Superadministratörer och Gruppadministratörer att ändra lösenordet för sina LDAP-användare. Fungerar bara när policyer för åtkomstkontroll är konfigurerade därefter på LDAP-servern. Eftersom lösenord skickas i klartext till LDAP-servern måste transportkryptering användas och lösenordshashning bör vara konfigurerat på LDAP-servern.",
    "(New password is sent as plain text to LDAP)" : "(Nytt lösenord skickas som oformaterad text till LDAP)",
    "Default password policy DN" : "Standard för lösenordspolicy DN",
    "The DN of a default password policy that will be used for password expiry handling. Works only when LDAP password changes per user are enabled and is only supported by OpenLDAP. Leave empty to disable password expiry handling." : "DN av en standard för lösenordspolicy som kommer användas för utgångshantering av lösenord. Fungerar bara när LDAP-lösenord ändras per användare är aktiverat och stöds bara av OpenLDAP. Lämna tomt för att inaktivera utgångshantering av lösenord.",
    "Special Attributes" : "Specialattribut",
    "Quota Field" : "Fält för lagringsutrymme",
    "Leave empty for user's default quota. Otherwise, specify an LDAP/AD attribute." : "Lämna tomt för användarens utrymme enligt standard. Annars, specificera ett LDAP/AD-attribut.",
    "Quota Default" : "Standardutrymme för lagring",
    "Override default quota for LDAP users who do not have a quota set in the Quota Field." : "Skriv över standardutrymmet för LDAP-användare som inte har ett utrymme satt i Utrymmesfältet",
    "Email Field" : "E-postfält",
    "Set the user's email from their LDAP attribute. Leave it empty for default behaviour." : "Sätt användarens e-post från deras LDAP-attribut. Lämna tomt för standardbeteende.",
    "User Home Folder Naming Rule" : "Namnregel för hemkatalog",
    "Leave empty for username (default). Otherwise, specify an LDAP/AD attribute." : "Lämnas tomt för användarnamn (standard). Ange annars ett LDAP-/AD-attribut.",
    "\"$home\" Placeholder Field" : "\"$home\" Platshållare-fält",
    "$home in an external storage configuration will be replaced with the value of the specified attribute" : "$home i en extern lagringskonfiguration kommer ersättas med värdet av det angivna attributet",
    "Internal Username" : "Internt användarnamn",
    "Internal Username Attribute:" : "Internt användarnamnsattribut:",
    "Override UUID detection" : "Åsidosätt UUID-detektion",
    "By default, the UUID attribute is automatically detected. The UUID attribute is used to doubtlessly identify LDAP users and groups. Also, the internal username will be created based on the UUID, if not specified otherwise above. You can override the setting and pass an attribute of your choice. You must make sure that the attribute of your choice can be fetched for both users and groups and it is unique. Leave it empty for default behavior. Changes will have effect only on newly mapped (added) LDAP users and groups." : "Som standard upptäcker ownCloud automatiskt UUID-attributet. Det UUID-attributet används för att utan tvivel identifiera LDAP-användare och grupper. Dessutom kommer interna användarnamn skapas baserat på detta UUID, om inte annat anges ovan. Du kan åsidosätta inställningen och passera ett attribut som du själv väljer. Du måste se till att attributet som du väljer kan hämtas för både användare och grupper och att det är unikt. Lämna det tomt för standard beteende. Förändringar kommer endast att påverka nyligen mappade (tillagda) LDAP-användare och grupper.",
    "UUID Attribute for Users:" : "UUID-attribut för användare:",
    "UUID Attribute for Groups:" : "UUID-attribut för grupper:",
    "Username-LDAP User Mapping" : "Användarnamn-LDAP användarmappning",
    "Usernames are used to store and assign metadata. In order to precisely identify and recognize users, each LDAP user will have an internal username. This requires a mapping from username to LDAP user. The created username is mapped to the UUID of the LDAP user. Additionally the DN is cached as well to reduce LDAP interaction, but it is not used for identification. If the DN changes, the changes will be found. The internal username is used all over. Clearing the mappings will have leftovers everywhere. Clearing the mappings is not configuration sensitive, it affects all LDAP configurations! Never clear the mappings in a production environment, only in a testing or experimental stage." : "Användarnamn används för att lagra och tilldela metadata. För att exakt identifiera användare har varje LDAP-användare ett internt användarnamn. Detta kräver en mappning från användarnamn till LDAP-användare. Det skapade användarnamnet är mappat till UUID för LDAP-användaren. Dessutom cachas DN för att minska LDAP-interaktion, men den används inte för identifiering. Om DN ändras kommer ändringarna att hittas. Det interna användarnamnet används på nytt. Att rensa mappningarna kommer att ha rester överallt. Att rensa mappningarna är inte konfigurationskänsligt, det påverkar alla LDAP-konfigurationer! Rensa aldrig mappningarna i en produktionsmiljö, bara i en test- eller experimentfas.",
    "Clear Username-LDAP User Mapping" : "Rensa användarnamn-LDAP användarmappning",
    "Clear Groupname-LDAP Group Mapping" : "Rensa gruppnamn-LDAP gruppmappning"
},
"nplurals=2; plural=(n != 1);");
