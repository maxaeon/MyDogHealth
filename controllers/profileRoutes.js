const router = require("express").Router();
const { Post, User, Dog, Appointment, Veterinarian, Medication, Food, Condition } = require("../models");
const withAuth = require("../utils/auth");

// GET route for main page
// Use withAuth middleware to prevent access to route
router.get("/", withAuth, async (req, res) => {
  try {
    // Find the logged in user based on the session ID
    const userData = await User.findByPk(req.session.user_id, {
      attributes: { exclude: ["password"] },
      include: [{ model: Dog }, { model: Veterinarian }, { model: Appointments }],
    });
    
 /*   // All the users dogs
    const allDogs = await Dogs.findAll({
      where: {
        user_id: req.session.user_id
      }
    })
    
    // Dog of the Day
    const dogDatum = await Dog.findByPk(1)
    // Post of the Day
    const postDatum = await Post.findByPk(1, {
      include: [{ model: User }]
    })
  */
    //const userPosts = allPosts.map((resource) => resource.get({ plain: true }));
    //console.log(userPosts)
    //const post = await postDatum.get({ plain: true })
    //const dog = await dogDatum.get({ plain: true })
    const user = await userData.get({ plain: true });
    console.log(user)
    res.render("dashboard", {
      ...user,
      //...post,
      //userPosts,
      //dog,
      loggedIn: req.session.loggedIn
    });
  } catch (error) {
    console.log(error)
    res.status(500).json(error);
  }
});


module.exports = router;
