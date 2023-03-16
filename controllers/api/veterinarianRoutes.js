const router = require("express").Router();
const { Veterinarian, User } = require("../../models");
// const withAuth = require('../../utils/auth');

// CREATE a Veterinarian 
router.post("/", async (req, res) => {
  try {
    const { title, description } = req.body
    const newVeterinarian = await Veterinarian.create({
      title,
      description,
      user_id: req.session.user_id
    });
    res.redirect('/profile');
  } catch (err) {
    res.status(500).json(err);
  }
});

// GET all Veterinarians
router.get("/", async (req, res) => {
  try {

    const veterinariansData = await Veterinarian.findAll();
    res.status(200).json(appointmentsData);
  } catch (err) {
    res.status(500).json(err);
  }
});

// GET a single Veterinarian
router.get("/:id", async (req, res) => {
  try {
    const veterinarianData = await Veterinarian.findByPk(req.params.id, {
      include: [
        {
          model: User,
        },
      ],
    });
    if (!veterinarianData) {
      res
        .status(404)
        .json({ message: "Sorry about that, no records found for this user." });

      return;
    }
    res.status(200).json(veterinarianData);
  } catch (err) {
    res.status(500).json(err);
  }
});

// DELETE a Veterinarian
router.delete("/:id", async (req, res) => {
  try {
    const veterinarianData = await Veterinarian.destroy({
      where: {
        id: req.params.id,
      },
    });

    if (!veterinarianData) {
      res
        .status(404)
        .json({ message: "Sorry about that, no records found for this user." });

      return;
    }
    const allVeterinarians = await Veterinarian.findAll()
    res.status(200).json(allVeterinarians);
  } catch (err) {
    res.status(500).json(err);
  }
});
module.exports = router;
