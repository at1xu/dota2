<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mechanics</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/mechanics.css">
  </head>
  <body>
  <?php include './components/header.php'; ?>
    <main>
        <div>
            <h1 class="headertext" >
               Mechanics
            </h1>
        </div>
        <div class="floatright">
            <a href="https://static.wikia.nocookie.net/dota2_gamepedia/images/e/e5/Mechanics_Header.png/revision/latest?cb=20161228095700" class="image">
                <img class="im" alt="Mechanics Header" src="https://static.wikia.nocookie.net/dota2_gamepedia/images/e/e5/Mechanics_Header.png/revision/latest?cb=20161228095700">
            </a>
        </div>
        <p>Mechanics are the inner workings of Dota 2. The following is a list of mechanics topics. Click on each topic to view how they are calculated, where they originate, as well as their complex interactions with other mechanics elements.</p>
        
        <h2>Unit Mechanics</h2>
        <div style="font-style:italic;font-size:15px;padding-left:2em;margin-bottom:0.5em">See also: <a href="">Hero Mechanics</a> and <a href="" >Table of Hero Attributes</a></div>
        <p>These properties are used by units in general, including <a href="">heroes</a>, <a href="">creeps</a>, and <a href="">summons</a>. Heroes possess a number of unique mechanics that other units don't. </p>
        <button class="accordion"></button>
        <div class="panel">
          <table class="wikitable" style="text-align:left;width: 100%;">
          <thead><tr>
          <th class="header " style="width:20%"  >Mechanic
          </th>
          <th class="header " style="width:80%"  >Introduction
          </th></tr></thead><tbody>
          <tr>
          <td class="tds"><a href="" >Abilities</a>
          <ul><li><a href="" ><img alt="Cooldown symbol" src="https://static.wikia.nocookie.net/dota2_gamepedia/images/b/b7/Cooldown_symbol.png/revision/latest/scale-to-width-down/16?cb=20180323111726"></a> <a href="">Cooldown</a></li></ul>
          </td>
          <td class="tds">Skills possessed by units, to be used on the battlefield. All heroes have at least three basic abilities and one ultimate ability. Hero abilities are acquired upon leveling up with experience. Most abilities need to be activated, while others are passive or augment a hero's basic attacks. Active abilities have a cooldown period between uses.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Attributes</a>
          <ul><li><span style="white-space:nowrap"><a href="" ><img alt="Strength attribute symbol" src="https://static.wikia.nocookie.net/dota2_gamepedia/images/7/7a/Strength_attribute_symbol.png/revision/latest/scale-to-width-down/20?cb=20180323111829" ></a> <a href="">Strength</a></span></li>
          <li><span style="white-space:nowrap"><a href="" ><img alt="Agility attribute symbol" src="https://static.wikia.nocookie.net/dota2_gamepedia/images/2/2d/Agility_attribute_symbol.png/revision/latest/scale-to-width-down/20?cb=20180323111717" ></a> <a href="">Agility</a></span></li>
          <li><span style="white-space:nowrap"><a href="" ><img alt="Intelligence attribute symbol" src="https://static.wikia.nocookie.net/dota2_gamepedia/images/5/56/Intelligence_attribute_symbol.png/revision/latest/scale-to-width-down/20?cb=20180323111753"     ></a> <a href="">Intelligence</a></span></li></ul>
          </td>
          <td class="tds">Baseline stats that increase with each level. Strength increases health and health regeneration, Agility increases armor and attack speed, Intelligence increases mana and mana regeneration. All heroes are associated with one of three attributes, known as their Primary Attribute. Raising a hero's Primary Attribute also raises their physical attack damage. Attributes can also be increased by items and abilities.
          </td></tr>
          <tr>
          <td class="tds"><a href="" ><img alt="Talent" src="https://static.wikia.nocookie.net/dota2_gamepedia/images/c/cd/Talent_tree_symbol.png/revision/latest/scale-to-width-down/16?cb=20230824194818"  ></a> <a href="" >Talents</a>
          </td>
          <td class="tds">Bonuses that increase a hero's stats and properties. Players can pick one of two talents at levels 10, 15, 20, and 25. The talents that were not chosen can be acquired at level 27, 28, 29 and 30 respectively.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Experience</a><sub>XP</sub>
          </td>
          <td class="tds">Points needed for heroes to level up. Experience is gained from killing creeps, enemy heroes and controlling outposts. A hero's maximum level is 30, after which experience no longer serves any purpose.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Spawning</a>
          </td>
          <td class="tds">Heroes spawn at the <a href="" >fountain</a>, in their base. Dead heroes respawn after a set amount of time. Respawn time is determined by the hero's level.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Health</a>
          <ul><li><a href="">Health Regeneration</a></li></ul>
          </td>
          <td class="tds">The amount of hit points a hero has. Health and health regeneration can be increased by <span style="white-space:nowrap"><a href="" ><img alt="Strength attribute symbol" src="https://static.wikia.nocookie.net/dota2_gamepedia/images/7/7a/Strength_attribute_symbol.png/revision/latest/scale-to-width-down/20?cb=20180323111829"     ></a> <a href="" >strength</a></span>, items, <a href=""><img alt="Talent" src="https://static.wikia.nocookie.net/dota2_gamepedia/images/c/cd/Talent_tree_symbol.png/revision/latest/scale-to-width-down/16?cb=20230824194818"   ></a> <a href=""  >talents</a> and abilities.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Mana</a>
          <ul><li><a href="">Mana Regeneration</a></li></ul>
          </td>
          <td class="tds">The resource required to use most abilities. Mana and mana regeneration can be increased by <span style="white-space:nowrap"><a href="" ><img alt="Intelligence attribute symbol" src="https://static.wikia.nocookie.net/dota2_gamepedia/images/5/56/Intelligence_attribute_symbol.png/revision/latest/scale-to-width-down/20?cb=20180323111753"></a></span> <a href="">talents</a> and abilities.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Armor</a>
          <ul><li><a href=""  >Armor Manipulation</a></li>
          <li><a href="" >Effective HP</a></li></ul>
          </td>
          <td class="tds">Property that reduces incoming physical damage by a scaling amount per attack. Armor comes in three types, and can be increased or decreased by <span style="white-space:nowrap"><a href="" ><img alt="Agility attribute symbol" src="https://static.wikia.nocookie.net/dota2_gamepedia/images/2/2d/Agility_attribute_symbol.png/revision/latest/scale-to-width-down/20?cb=20180323111717"   ></a> <a href="" >agility</a></span>, items, <a href="" ><img alt="Talent" src="https://static.wikia.nocookie.net/dota2_gamepedia/images/c/cd/Talent_tree_symbol.png/revision/latest/scale-to-width-down/16?cb=20230824194818"></a> <a href=""  >talents</a> and abilities.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Damage Block</a>
          </td>
          <td class="tds">Property that reduces incoming damage by a fixed amount per attack. It is granted by some items and abilities.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Magic Resistance</a>
          <ul><li><a href=""  >Effective HP</a></li></ul>
          </td>
          <td class="tds">Property that reduces incoming magical damage by a percentage. All heroes start with 25% Magic Resistance. It can be further increased by items, <a href=""><img alt="Talent" src="https://static.wikia.nocookie.net/dota2_gamepedia/images/c/cd/Talent_tree_symbol.png/revision/latest/scale-to-width-down/16?cb=20230824194818"></a> <a href=""  >talents</a> and abilities.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Evasion</a>
          <ul><li><a href="" >True Strike</a></li>
          <li><a href=""  >Accuracy</a></li></ul>
          </td>
          <td class="tds">Property that grants a percentage chance to completely avoid a physical attack. True strike allows a hero to ignore evasion.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Movement Speed</a>
          </td>
          <td class="tds">The rate at which a unit moves. Movement speed can be increased and decreased by items and abilities.
          </td></tr>
          <tr>
          <td class="tds"><a href="">Status Resistance</a>
          </td>
          <td class="tds">Status resistance is an attribute of a hero that reduces the duration of most status debuffs and the slow values of <a href="">slows</a>. By default, every unit has a base status resistance of zero.
          </td></tr>
          <tr>
          <td class="tds"><a href=""  >Turn Rate</a>
          </td>
          <td class="tds">The rate at which a unit's model turns measured with time. Most actions require the model to be facing towards the direction of the action about to be taken.
          </td></tr>
          <tr>
          <td class="tds"><a href=""  >Collision Size</a>
          <ul><li><a href=""  >Phased</a></li></ul>
          </td>
          <td class="tds">The internal size of a unit, which is impassable and can block other units. Most heroes have the same collision size, regardless of their graphical model.
          </td></tr>
          <tr>
          <td class="tds"><a href="">Aura</a>
          </td>
          <td class="tds">Passive buffs and debuffs that surround a hero or unit in a circular radius. Auras come from abilities and items, and cannot be <a href="" >dispelled</a>.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Illusions</a>
          </td>
          <td class="tds">Copies of heroes that are generated by abilities, items, or runes. Illusions come in different types, and possess lesser properties of the original hero.
          </td></tr></tbody></table>
        </div>
        <div  style="display: none;">Advertisement</div>
        <h2>Attack Mechanics</h2>
        <button class="accordion"></button>
        <div class="panel">
          <table class="wikitable" style="text-align:left;width: 100%;">
          <thead><tr>
          <th class="header " >Mechanic
          </th>
          <th class="header " >Introduction
          </th></tr></thead><tbody>
          <tr>
          <td class="tds"><a href="" >Damage Types</a>
          <ul><li><a href=""  >Physical Damage</a></li>
          <li><a href=""  >Magical Damage</a></li>
          <li><a href=""  >Pure Damage</a></li>
          <li><a href="" >HP Removal</a></li></ul>
          </td>
          <td class="tds">There are three overall categories of damage. Physical damage is done by basic attacks, and some abilities. Magical damage is done by abilities and items. Pure damage is the rarest, and penetrates armor and magic resistance. HP Removal ignores all forms of damage manipulation, and is not technically considered a type of damage.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Attack Damage</a>
          <ul><li><a href=""  >Total Attack Damage</a></li>
          <li><a href=""  >Instant Attack</a></li></ul>
          </td>
          <td class="tds">Damage done by basic attacks. This type of damage is usually <a href="" >physical</a>, but is split into four <a href="" >Attack Classes</a> that interact differently with different <a href="">Defense Classes</a>.
          </td></tr>
          <tr>
          <td class="tds"><a href=""  >Spell damage</a>
          <ul><li><a href="" >Spell amplification</a></li></ul>
          </td>
          <td class="tds">Damage done by any source other than basic attacks. Spell damage can come in magical, physical, or pure damage types.
          </td></tr>
          <tr>
          <td class="tds"><a href=""  >Damage manipulation</a>
          <ul><li><a href="">Damage amplification</a></li>
          <li><a href=""  >Damage reduction</a></li>
          <li><a href=""  >Damage negation</a></li>
          <li><a href="" >Damage Barrier</a></li></ul>
          </td>
          <td class="tds">Calculations that affect the final value of a damage instance. Items and abilities can amplify, reduce, or negate final damage.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Damage over time</a>
          </td>
          <td class="tds">Periodic damage done over intervals, usually in small amounts.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Attack Speed</a>
          </td>
          <td class="tds">The time it takes to perform an attack. Attack speed can be increased or decreased by items and abilities.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Attack animation</a>
          <ul><li><a href=""  >Attack point</a></li>
          <li><a href=""  >Attack backswing</a></li></ul>
          </td>
          <td class="tds">The model animation that plays when a unit attacks. Damage is dealt at the attack point, followed by the attack backswing of the animation. Attack animations play faster or slower according to a unit's attack speed.
          </td></tr>
          <tr>
          <td class="tds"><a href=""  >Cast animation</a>
          <ul><li><a href=""  >Cast point</a></li>
          <li><a href=""  >Cast backswing</a></li></ul>
          </td>
          <td class="tds">The model animation that plays when a unit uses an ability. The ability is used at the cast point, followed by the cast backswing of the animation. Each ability has its own unique cast animation. The speed of cast animations can be altered only with <a href="" >arcane blink</a> , Other than that cast speed stays the same throughout the match for each ability.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Channeling</a>
          </td>
          <td class="tds">The model animation for certain abilities that require a unit to stand still in order to affect the ability over time.
          </td></tr>
          <tr>
          <td class="tds"><a href=""  >Projectile speed</a>
          </td>
          <td class="tds">The speed at which the projectile from a ranged basic attack travels. Abilities have unique projectile speeds for their projectiles.
          </td></tr>
          <tr>
          <td class="tds"><a href=""><img alt="Attack Range" src="https://static.wikia.nocookie.net/dota2_gamepedia/images/d/d9/Attack_range_icon.png/revision/latest/scale-to-width-down/15?cb=20210509025533"  ></a> <a href="" >Attack Range</a>
          </td>
          <td class="tds">The distance from which a unit can perform basic attacks.<br>Most Melee heroes have a range of 150, while Ranged heroes can have a range of up to 700.
          </td></tr></tbody></table>
        </div>
        <div  style="display: none ;"><div >Advertisement</div></div><h3>Attack modifiers</h3>
        <div style="font-style:italic;font-size:15px;padding-left:2em;margin-bottom:0.5em">Main Article: <a href=""  >Attack modifier</a></div>
        <p>Additional effects can be added to basic attacks. Some of these effects stack with each other in several ways, while others do not stack at all.
        </p>
        <button class="accordion"></button>
        <div class="panel">
          <table class="wikitable" style="text-align:left;width: 100%;">
          <thead><tr>
          <th class="header "  >Mechanic
          </th>
          <th class="header "  >Introduction
          </th></tr></thead><tbody>
          <tr>
          <td class="tds"><a href=""  >Critical strike</a>
          </td>
          <td class="tds">Modifier that increases damage from basic attacks by a percentage multiplier.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Cleave &amp; Splash</a>
          </td>
          <td class="tds">Modifiers that cause damage from basic attacks to spill past a single target to a larger area.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Bash</a>
          </td>
          <td class="tds">Modifier that gives basic attacks a chance to <a href="" >stun</a>.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Lifesteal</a>
          </td>
          <td class="tds">Modifier that causes attacks to regenerate a portion of their damage as health.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Mana break</a>
          </td>
          <td class="tds">Modifier that causes attacks to burn mana from the target, dealing damage based on the burned amount.
          </td></tr></tbody></table>
          <h2>World Mechanics</h2>
          <table class="wikitable" style="text-align:left;width: 100%;">
          <thead><tr>
          <th class="header "  >Mechanic
          </th>
          <th class="header "  >Introduction
          </th></tr></thead><tbody>
          <tr>
          <td class="tds"><a href=""  >Game map</a>
          <ul><li><a href=""  >Lanes</a></li>
          <li><a href=""  >Jungle</a></li></ul>
          </td>
          <td class="tds">The battlefield where <i>Dota 2</i> matches takes place. Three Lanes are present on the map, and lead into each team's base. In between the lanes are wooded areas known as the Jungle.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Buildings</a>
          <ul><li><a href="" >Ancient</a></li>
          <li><a href=""  >Towers</a></li>
          <li><a href=""  >Barracks</a></li>
          <li><a href=""  >Outposts</a></li></ul>
          </td>
          <td class="tds">Structures that aid in the defense of each opposing side. The main building is the Ancient, which must be destroyed in order for a side to win. Buildings can be made temporarily invulnerable with <span class="image-link"><a href=""><img alt="Glyph of Fortification icon" src="https://static.wikia.nocookie.net/dota2_gamepedia/images/5/53/Glyph_of_Fortification_icon.png/revision/latest/scale-to-width-down/16?cb=20161218035248" ></a> <a href="">Glyph of Fortification</a></span>.
          </td></tr>
          <tr>
          <td class="tds"><a href=""  >Shops</a>
          </td>
          <td class="tds">Stores scattered across the map that sell items to heroes.
          </td></tr>
          <tr>
          <td class="tds"><span style="color:#DAA520;">Gold <a href=""><img alt="Gold" src="https://static.wikia.nocookie.net/dota2_gamepedia/images/c/cd/Gold_symbol.png/revision/latest/scale-to-width-down/16?cb=20210624223608"  ></a></span>
          <ul><li><a href=""  >Buyback</a></li></ul>
          </td>
          <td class="tds">Currency used to buy items, which increase a hero's capabilities. Heroes gain a small amount of gold every second, and can earn more gold by killing creeps, enemy heroes, and buildings. Dead heroes can use gold to Buyback, allowing them to respawn instantly.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Items</a>
          <ul><li><a href=""  >Recipes</a></li>
          <li><a href="" >Item sharing</a></li>
          <li><a href="" >Disassembling</a></li></ul>
          </td>
          <td class="tds">Objects that can be purchased on the game map. Items increase a hero's properties, and grant them special abilities and effects. Smaller items combine into larger items, with the help of recipes. Some items can be disassembled. <a href="" >Neutral items</a> can be found by killing <a href="" >neutral creeps</a>.
          </td></tr>
          <tr>
          <td class="tds"><span class="image-link"><a href="" ><img alt="Animal Courier Radiant minimap icon" src="https://static.wikia.nocookie.net/dota2_gamepedia/images/5/58/Animal_Courier_Radiant_minimap_icon.png/revision/latest/scale-to-width-down/24?cb=20150122172647"  ></a> <a href="" >Courier</a></span>
          </td>
          <td class="tds">A special unit owned by each player that holds and delivers items to players.
          </td></tr>
          <tr>
          <td class="tds"><a href="">Creeps</a>
          <ul><li><a href=""  >Lane creeps</a></li>
          <li><a href="">Neutral creeps</a></li></ul>
          </td>
          <td class="tds">Units that automatically spawn on the map. They are killed for gold and experience. Lane creeps attack and push towards the opposing base. Neutral creeps reside in the jungle.
          </td></tr>
          <tr>
          <td class="tds"><a href="">Summons</a>
          </td>
          <td class="tds">Units that are created by heroes to aid them in combat.
          </td></tr>
          <tr>
          <td class="tds"><a href=""  >Wards</a>
          </td>
          <td class="tds">Units that provide vision, or some other utility.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Runes</a>
          </td>
          <td class="tds">Special boosters that spawn on the map. Runes give extra gold and experience to heroes who pick them up, as well as a variety of power-up effects.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Vision</a>
          <ul><li><a href=""  >Ground vision</a></li>
          <li><a href=""  >Flying vision</a></li>
          <li><a href=""  >Shared vision</a></li>
          <li><a href=""  >True sight</a></li></ul>
          </td>
          <td class="tds">A unit's ability to see the map in real time, versus being covered by the fog of war. Most units have a radius of vision around them. Some units can turn invisible, and can only be detected by True Sight.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Time of day</a>
          </td>
          <td class="tds">The cycle of night and day. Some heroes have abilities that function differently at night. Vision is also limited at night.
          </td></tr>
          <tr>
          <td class="tds"><a href="">Trees</a>
          </td>
          <td class="tds">Vegetation that serve as impassible obstacles on the game map. Trees can be cut down, and will regrow over time. Some items and abilities can interact with trees.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Pseudo-random distribution</a>
          </td>
          <td class="tds">The chance an ability or item's effect will occur, increasing every time the effect does not occur.
          </td></tr>
          <tr>
          <td class="tds"><a href=""  >True random distribution</a>
          </td>
          <td class="tds">The chance an ability or item's effect will occur, calculated independently of previous instances.
          </td></tr></tbody></table>
        </div>
        <div  style="display: none ;"><div >Advertisement</div></div><h2><span class="mw-headline" id="Status_effects">Status effects</span></h2>
        <div style="font-style:italic;font-size:15px;padding-left:2em;margin-bottom:0.5em">Main Article: <a href="">Disable</a></div>
        <p>Status effects are a variety of conditions that can afflict units. They are caused by abilities and items.
        </p>
        <button class="accordion"></button>
        <div class="panel">
          <table class="wikitable" style="text-align:left;width: 100%;">
          <thead><tr>
          <th class="header " >Mechanic
          </th>
          <th class="header " >Introduction
          </th></tr></thead><tbody>
          <tr>
          <td class="tds"><a href="" >Stun</a>
          <ul><li><a href=""  >Shackle</a></li></ul>
          </td>
          <td class="tds">Unit is unable to move or perform any actions. Shackle is the same as stun, but requires the attacking hero to channel the effect.
          </td></tr>
          <tr>
          <td class="tds"><a href="">Root</a>
          </td>
          <td class="tds">Unit is unable to move, but can perform some actions.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Leash</a>
          </td>
          <td class="tds">Unit is unable to move outside a limited range, but can perform some actions. Similar to root.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Hex</a>
          </td>
          <td class="tds">Unit is transformed into a critter, and is unable to perform any actions except move at a slow pace.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Cyclone</a>
          </td>
          <td class="tds">Unit is swept into the air, where it is invulnerable, but cannot move or perform any actions.
          </td></tr>
          <tr>
          <td class="tds"><a href="">Hide/Banish</a>
          </td>
          <td class="tds">Unit is temporarily removed from the game map, and cannot be damaged or affected by any other mechanics.
          </td></tr>
          <tr>
          <td class="tds"><a href=""  >Blind</a>
          </td>
          <td class="tds">Unit has a chance to miss basic attacks.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Silence</a>
          </td>
          <td class="tds">Unit is disabled from using unit abilities, but can still use item abilities.
          </td></tr>
          <tr>
          <td class="tds"><a href=""  >Mute</a>
          </td>
          <td class="tds">Unit is disabled from using item abilities.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Break</a>
          </td>
          <td class="tds">Unit's passive abilities are disabled.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Disarm</a>
          </td>
          <td class="tds">Unit cannot attack, but can still use abilities.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Slow</a>
          </td>
          <td class="tds">Unit's movement speed is reduced. Most slows end after a set time, while other slows gradually decrease over time.
          </td></tr>
          <tr>
          <td class="tds"><a href="">Trap</a>
          </td>
          <td class="tds">Unit's movement is restricted by pathing blockers, but can still perform actions. Units try to path around them if possible.
          </td></tr>
          <tr>
          <td class="tds"><a href=""  >Barrier</a>
          </td>
          <td class="tds">Unit's movement and several sources of <a href="" >forced movement</a> are restricted by barriers, but can still perform actions. Units do not try to path around them, manual guidance is required.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Taunt</a>
          </td>
          <td class="tds">Unit is forced to attack a certain target, ignoring player input.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Fear</a>
          </td>
          <td class="tds">Unit is forced to run towards their team's fountain, ignoring player input.
          </td></tr>
          <tr>
          <td class="tds"><a href=""  >Hypnosis</a>
          </td>
          <td class="tds">Unit is forced to move towards a hypnotizing source, ignoring player input.
          </td></tr>
          <tr>
          <td class="tds"><a href=""  >Forced movement</a>
          </td>
          <td class="tds">Unit is forced to move in a certain direction, ignoring player input.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Teleport/Blink</a>
          </td>
          <td class="tds">Unit moves to a location instantaneously.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Invisibility</a>
          </td>
          <td class="tds">Unit cannot be seen by normal vision, but can be detected by <a href=""  >True Sight</a>.
          </td></tr>
          <tr>
          <td class="tds"><a href=""  >Phased</a>
          </td>
          <td class="tds">Unit can move through other units, ignoring <a href=""  >collision size</a>.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Invulnerability</a>
          </td>
          <td class="tds">Unit cannot be damaged by physical attacks.
          </td></tr>
          <tr>
          <td class="tds"><a href=""  >Spell immunity</a>
          </td>
          <td class="tds">Unit cannot be targeted or affected by most spells.
          </td></tr>
          <tr>
          <td class="tds"><a href=""  >Attack immunity</a>
          </td>
          <td class="tds">Unit cannot be attacked. Already launched attack projectiles cannot harm or affect the unit. Unit is still affected by physical spell damage.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Ethereal</a>
          </td>
          <td class="tds">Unit assumes a ghostly form, becoming immune to physical damage, but takes more magical damage. Ethereal units are <a href="" >disarmed</a> and <a href="" >attack immune</a>.
          </td></tr></tbody></table>
          <div  style="display: none;"><div >Advertisement</div></div><h3>Dispelling</h3>
          <div style="font-style:italic;font-size:15px;padding-left:2em;margin-bottom:0.5em">Main Article: <a href="" >Dispel</a></div>
          <p><a href="" >Dispel</a> refers to methods that remove buffs, debuffs, and status effects. This is an important topic to understanding the internal interactions of <i>Dota 2</i>.
          </p>
          <table class="wikitable" style="text-align:left;width: 100%;">
          <thead><tr>
          <th class="header"  >Mechanic
          </th>
          <th class="header"  >Introduction
          </th></tr></thead><tbody>
          <tr>
          <td class="tds"><a href="" >Basic dispel</a>
          </td>
          <td class="tds">A simple dispel granted by abilities and items.
          </td></tr>
          <tr>
          <td class="tds"><a href=""  >Spell immunity</a>
          </td>
          <td class="tds">Some forms of spell immunity provide a basic dispel when activated.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Strong dispel</a>
          </td>
          <td class="tds">A greater dispel that removes more status effects, granted by a handful of abilities.
          </td></tr>
          <tr>
          <td class="tds"><a href=""  >Removable buffs</a>
          </td>
          <td class="tds">A list of buffs that can be removed by various forms of dispel.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Removable debuffs</a>
          </td>
          <td class="tds">A list of debuffs that can be removed by various forms of dispel.
          </td></tr></tbody></table>
        </div>
        <h2>Gameplay</h2>
        <button class="accordion"></button>
        <div class="panel">
          <table class="wikitable " style="text-align:left;width: 100%;">
          <thead><tr>
          <th class="header " >Mechanic
          </th>
          <th class="header "  >Introduction
          </th></tr></thead><tbody>
          <tr>
          <td class="tds"><a href="" >Game modes</a>
          </td>
          <td class="tds">Map conditions with different rulesets regarding hero picking and other variables.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Custom Games</a>
          <ul><li><a href="">Modding</a></li></ul>
          </td>
          <td class="tds">Game modes created by community members, with its own set of rules and assets. Custom games are made through modding.
          </td></tr>
          <tr>
          <td class="tds"><a href=""  >Heads-up display</a> (HUD)
          </td>
          <td class="tds">The in-game graphical interface, showing a hero's portrait, abilities, items, stats, and more.
          </td></tr>
          <tr>
          <td class="tds"><a href=""   >Minimap</a>
          <ul><li><a href="" >Scan</a></li></ul>
          </td>
          <td class="tds">A small graphical representation of the game map, where heroes and other information can be seen. <a href="">Scanning</a> is a way to reveal the presence of enemies on the minimap.
          </td></tr>
          <tr>
          <td class="tds"><a href="">Disjoint</a>
          </td>
          <td class="tds">The act of dodging a projectile using an ability or item. Not all projectiles can be disjointed.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Denying</a>
          </td>
          <td class="tds">The act of killing a friendly hero, creep or building with low health. Denying prevents enemy heroes from gaining gold and experience from the denied unit or building.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Creep control techniques</a>
          </td>
          <td class="tds">Methods to manipulate creeps for the purpose of positioning, or spawning more creeps to kill later on.
          </td></tr>
          <tr>
          <td class="tds"><a href=""  >Roles</a>
          </td>
          <td class="tds">Play styles that heroes fulfill to serve a specific function for their team.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Ganking</a>
          </td>
          <td class="tds">The strategy of ambushing and attacking isolated enemy heroes in order to secure an early game advantage.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Pushing</a>
          </td>
          <td class="tds">The strategy of focusing on destroying buildings and pressuring the lanes.
          </td></tr>
          <tr>
          <td class="tds"><a href="">Harassment</a>
          </td>
          <td class="tds">The strategy of attacking opponents to intimidate them from farming effectively, especially during the early game.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Farming</a>
          </td>
          <td class="tds">The act of accumulating gold by killing as many creeps as possible.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Jungling</a>
          </td>
          <td class="tds">The act of farming in the jungle by killing neutral creeps, instead of farming in the lanes.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Initiating</a>
          </td>
          <td class="tds">The act of starting a teamfight, usually by disabling opponents with powerful abilities first.
          </td></tr></tbody></table>
        </div>
        <div  style="display: none ;"><div >Advertisement</div></div><h2>System</h2>
        <div style="font-style:italic;font-size:15px;padding-left:2em;margin-bottom:0.5em">See also: <a href="" >System Menu</a></div>
        <p>This is a list of major functions that are not directly part of the game. It involves various features regarding player input, <a href="" >Steam</a>, and others.
        </p>
        
        <button class="accordion"></button>
        <div class="panel">
            <table class="wikitable" style="text-align:left;width: 100%;">
            <thead><tr>
            <th class="header " >Mechanic
            </th>
            <th class="header " >Introduction
            </th></tr></thead><tbody>
            <tr>
            <td class="tds"><a href="" >Patches</a>
            </td>
            <td class="tds">Updates to the game client, including changes to elements outside of mechanics, such as cosmetic items or the graphical interface.
            </td></tr>
            <tr>
            <td class="tds"><a href=""  >Versions</a>
            </td>
            <td class="tds">Updates to game mechanics, including new heroes, items, and balance adjustments. Versions are shipped with patches.
            </td></tr>
            <tr>
            <td class="tds"><a href="" >Trophies  Profile Levels</a>
            </td>
            <td class="tds">In-game achievements that are awarded for accomplishing various feats.
            </td></tr>
            <tr>
            <td class="tds"><a href="" >Events</a>
            </td>
            <td class="tds">Time-limited promotions that come with exclusive cosmetic items, trophies, and more. Events usually take place around big tournaments and holidays.
            </td></tr>
            <tr>
            <td class="tds"><a href="" >Spectating</a>
            <ul><li><a href="" >Replay</a></li></ul>
            </td>
            <td class="tds">A function that allows players to watch live games, as well as replays of past games.
            </td></tr></tbody></table>
        </div>
        <h3>Settings</h3>
        <div style="font-style:italic;font-size:15px;padding-left:2em;margin-bottom:0.5em">Main Article: <a href="">Game Settings</a></div>
        <p><a href="" >Game settings</a> allow users to change display, graphics, audio, and control settings.
        </p>
        
        <button class="accordion"></button>
        <div class="panel">
          <table class="wikitable" style="text-align:left;width: 100%;">
          <thead><tr>
          <th class="header "  >Mechanic
          </th>
          <th class="header "  >Introduction
          </th></tr></thead><tbody>
          <tr>
          <td class="tds"><a href="" >Controls</a>
          <ul><li><a href="" >Hotkeys</a></li>
          <li><a href="" >Chat wheel</a></li></ul>
          </td>
          <td class="tds">Settings for hotkeys, mouse cursor interactions, and the in-game chat wheel.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Launch Options</a>
          </td>
          <td class="tds">Command lines that can be entered Steam's settings to change the <i>Dota 2</i> client.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Console commands</a>
          </td>
          <td class="tds">List of commands that can be used through the in-game <a href="">console</a>.
          </td></tr>
          <tr>
          <td class="tds"><a href="">Cheats</a>
          </td>
          <td class="tds">List of official cheats that can be used in private lobbies, for the purpose of testing. Cheats cannot be used in matchmaking.
          </td></tr></tbody></table>
          <div  style="display: none ;"><div >Advertisement</div></div><h3>Matchmaking</h3>
          <div style="font-style:italic;font-size:15px;padding-left:2em;margin-bottom:0.5em">Main Article: <a href="">Matchmaking</a></div>
          <p><a href="" >Matchmaking</a> is the automated system that finds and matches players together, usually based on internal calculations of player skill. Casual and ranked matchmaking are both available.
          </p>
          <table class="wikitable" style="text-align:left;width: 100%;">
          <thead><tr>
          <th class="header " >Mechanic
          </th>
          <th class="header ">Introduction
          </th></tr></thead><tbody>
          <tr>
          <td class="tds"><a href="" >Matchmaking Rating</a>
          </td>
          <td class="tds">The value that determines a player's skill level. Also known as MMR. Winning increases a player's rating, while losing decreases it.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Leaderboards</a>
          </td>
          <td class="tds">Regional ladder rankings for the top players with the highest matchmaking rating.
          </td></tr>
          <tr>
          <td class="tds"><a href="">Bots</a>
          </td>
          <td class="tds">AI controlled heroes that players can choose to match with.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Priority</a>
          </td>
          <td class="tds">Internal flag that determines who players are matched with. Players with a history of bad conduct are placed in low priority, and can only match with others in low priority.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Ban</a>
          <ul><li><a href="" >Report</a></li>
          <li><a href="" >Commend</a></li></ul>
          </td>
          <td class="tds">Punishments given out to players who violate rules or community norms. Communication bans are given out based on feedback from other players. Total game bans are given out to players who use third party programs to cheat.
          </td></tr></tbody></table>
        </div>
        <h3><span class="mw-headline" id="Cosmetic_items">Cosmetic items</span></h3>
        <div style="font-style:italic;font-size:15px;padding-left:2em;margin-bottom:0.5em">Main Article: <a href=""  >Cosmetic Items</a></div>
        <p><a href=""  >Cosmetic items</a> can be used to alter the appearance of heroes and various elements of the interface. They are purely cosmetic and do not affect game mechanics.
        </p>
        
        <button class="accordion"></button>
        <div class="panel">
          <table class="wikitable" style="text-align:left;width: 100%;">
          <thead><tr>
          <th class="header "  >Mechanic
          </th>
          <th class="header " >Introduction
          </th></tr></thead><tbody>
          <tr>
          <td class="tds"><a href="">Item drop system</a>
          <ul><li><a href=""  >Drop list</a></li></ul>
          </td>
          <td class="tds">Cosmetic items drop randomly after matches. Rare items drop less often.
          </td></tr>
          <tr>
          <td class="tds"><a href="">Rarity</a>
          </td>
          <td class="tds">Property of items that scale from <a href="" ><span style="color: #b0c3d9;">Common</span></a> to <a href="" ><span style="color: #ade55c;">Arcana</span></a>. Rarer items are generally harder to obtain, and contain more customizations.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Quality</a>
          </td>
          <td class="tds">Property of items that are associated with the circumstances of their origin.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Armory</a>
          </td>
          <td class="tds">The in-game interface where all cosmetic items are stored.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Treasures</a>
          </td>
          <td class="tds">Boxes that can be opened to obtain random cosmetic items.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Gems</a>
          </td>
          <td class="tds">Modifiers that can be socketed into some items to grant them a counter or custom effects.
          </td></tr>
          <tr>
          <td class="tds"><a href=""  >Music</a>
          </td>
          <td class="tds">Soundtracks that play depending on the events of the game. Numerous custom music packs exist.
          </td></tr>
          <tr>
          <td class="tds"><a href=""  >Steam Market</a>
          </td>
          <td class="tds">A community marketplace where cosmetic items can be bought and sold.
          </td></tr>
          <tr>
          <td class="tds"><a href="" >Trading</a>
          </td>
          <td class="tds">The act of trading cosmetic items with a friend on Steam, with certain restrictions.
          </td></tr>
          <tr>
          <td class="tds"><a href=""  >Gifting</a>
          </td>
          <td class="tds">The act of sending cosmetic items to a friend as a gift, with certain restrictions.
          </td></tr></tbody></table>
        </div>
            
    </main>
    <br>
    <hr>
    <?php include './components/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
      var acc = document.getElementsByClassName("accordion");
      var i;
      
      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
          this.classList.toggle("activ");
          var panel = this.nextElementSibling;
          if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
          } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
          } 
        });
      }
      </script>
  </body>
</html>
